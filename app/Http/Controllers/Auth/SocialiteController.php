<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirectToProvider(string $provider): RedirectResponse
    {
        $providers = ['google'];

        if (!in_array($provider, $providers)) {
            abort(404);
        }

        return Socialite::driver($provider)->with(['prompt' => 'select_account'])->redirect();
    }

    public function handleProviderCallback(string $provider): RedirectResponse
    {
        try {
            $user = Socialite::driver($provider)->stateless()->user();

            $this->handleUser($user);

            return redirect()->intended(route('core.dashboard.index'));
        } catch (\Exception $e) {
            Log::error($e->getMessage());

            return redirect()->route('home');
        }
    }

    public function handleUser($user): void
    {
        $user = User::query()->firstOrCreate([
            'email' => $user['email']
        ], [
            'name' => $user['name'],
            'email' => $user['email'],
            'password' => null,
            'email_verified_at' => Carbon::now()
        ])->assignRole('user');

        Auth::login($user, true);

        request()->session()->regenerate();
    }
}
