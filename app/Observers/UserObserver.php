<?php

namespace App\Observers;

use App\Models\User;
use App\Services\Calcom\CalcomService;
use Illuminate\Support\Facades\Log;

class UserObserver
{
    public function __construct(protected CalcomService $calcomService)
    {
    }

    public function created(User $user): void
    {
        $this->provisionWhenEligible($user, true);
    }

    public function updated(User $user): void
    {
        if ($user->wasChanged('trial_ends_at')) {
            $this->provisionWhenEligible($user, false);
        }
    }

    protected function provisionWhenEligible(User $user, bool $created): void
    {
        if (! $user->hasCalcomAccess() || ! $this->calcomService->isProvisioningEnabled()) {
            return;
        }

        if (! $this->calcomService->provisionUser($user)) {
            Log::warning('Failed to provision Cal.com user from user observer.', [
                'user_id' => $user->id,
                'event' => $created ? 'created' : 'updated',
            ]);
        }
    }
}
