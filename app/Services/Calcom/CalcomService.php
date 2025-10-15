<?php

namespace App\Services\Calcom;

use App\Models\User;
use Firebase\JWT\JWT;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Throwable;

class CalcomService
{
    public function isProvisioningEnabled(): bool
    {
        return filled(config('calcom.url')) && filled(config('calcom.api_key'));
    }

    public function isSsoEnabled(): bool
    {
        return filled(config('calcom.url')) && filled(config('calcom.jwt_secret'));
    }

    public function provisionUser(User $user): bool
    {
        if (! $this->isProvisioningEnabled()) {
            return false;
        }

        if (filled($user->calcom_user_id)) {
            return true;
        }

        $payload = [
            'email' => $user->email,
            'name' => $user->name,
            'username' => $this->generateUsername($user),
            'password' => Str::random(40),
        ];

        try {
            $response = Http::baseUrl(config('calcom.url'))
                ->withToken(config('calcom.api_key'))
                ->acceptJson()
                ->post('/api/v1/users', $payload);
        } catch (Throwable $exception) {
            Log::error('Cal.com user provisioning failed.', [
                'user_id' => $user->id,
                'exception' => $exception->getMessage(),
            ]);

            return false;
        }

        if (! $response->successful()) {
            Log::warning('Cal.com user provisioning request was not successful.', [
                'user_id' => $user->id,
                'status' => $response->status(),
                'body' => $response->body(),
            ]);

            return false;
        }

        $calcomId = data_get($response->json(), 'id')
            ?? data_get($response->json(), 'data.id');

        if (! $calcomId) {
            Log::warning('Cal.com response did not include an id for the created user.', [
                'user_id' => $user->id,
                'response' => $response->json(),
            ]);
        }

        $user->forceFill([
            'calcom_user_id' => $calcomId,
        ])->save();

        return true;
    }

    public function generateSsoUrl(User $user): ?string
    {
        if (! $this->isSsoEnabled()) {
            return null;
        }

        $token = JWT::encode([
            'email' => $user->email,
            'name' => $user->name,
            'calUserId' => $user->calcom_user_id,
            'iat' => now()->timestamp,
            'exp' => now()->addSeconds(max(config('calcom.jwt_ttl'), 5))->timestamp,
        ], config('calcom.jwt_secret'), 'HS256');

        return config('calcom.url').'/auth/sso?token='.$token;
    }

    protected function generateUsername(User $user): string
    {
        $base = $user->username ?: Str::slug($user->name);

        if (! $base) {
            $base = 'user-'.$user->id;
        }

        return Str::slug($base.'-'.Str::lower(Str::random(6)));
    }
}
