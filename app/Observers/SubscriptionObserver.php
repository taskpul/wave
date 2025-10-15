<?php

namespace App\Observers;

use App\Services\Calcom\CalcomService;
use Illuminate\Support\Facades\Log;
use Wave\Subscription;

class SubscriptionObserver
{
    public function __construct(protected CalcomService $calcomService)
    {
    }

    public function created(Subscription $subscription): void
    {
        $this->provisionWhenActive($subscription);
    }

    public function updated(Subscription $subscription): void
    {
        if ($subscription->wasChanged('status')) {
            $this->provisionWhenActive($subscription);
        }
    }

    protected function provisionWhenActive(Subscription $subscription): void
    {
        if ($subscription->status !== 'active') {
            return;
        }

        $user = $subscription->user;

        if (! $user) {
            return;
        }

        if (! $user->hasCalcomAccess() || ! $this->calcomService->isProvisioningEnabled()) {
            return;
        }

        if (! $this->calcomService->provisionUser($user)) {
            Log::warning('Failed to provision Cal.com user from subscription observer.', [
                'subscription_id' => $subscription->id,
                'user_id' => $user->id,
            ]);
        }
    }
}
