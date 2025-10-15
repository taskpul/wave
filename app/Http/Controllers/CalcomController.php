<?php

namespace App\Http\Controllers;

use App\Services\Calcom\CalcomService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CalcomController extends Controller
{
    public function __construct(protected CalcomService $calcomService)
    {
    }

    public function __invoke(Request $request): RedirectResponse
    {
        $user = $request->user();

        if (! $user->hasCalcomAccess()) {
            return redirect()
                ->route('settings.subscription')
                ->with('error', __('Start a free trial or activate a subscription to access scheduling.'));
        }

        if ($this->calcomService->isProvisioningEnabled()) {
            $this->calcomService->provisionUser($user);
        }

        $redirectUrl = $this->calcomService->generateSsoUrl($user);

        if (! $redirectUrl) {
            return redirect()
                ->route('wave.dashboard')
                ->with('error', __('Cal.com single sign-on is not configured.'));
        }

        return redirect()->away($redirectUrl);
    }
}
