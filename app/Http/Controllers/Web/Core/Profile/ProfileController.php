<?php

namespace App\Http\Controllers\Web\Core\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Core\Profile\UpdateProfileRequest;
use App\Services\Core\Profile\ProfileService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function __construct(protected ProfileService $profileService)
    {
    }

    public function edit(): View
    {
        $data = [
            'user' => auth()->user(),
        ];

        return view('core.profile.edit', $data);
    }

    public function update(UpdateProfileRequest $request): RedirectResponse
    {
        $this->profileService->update($request->validated());

        return redirect()->back();
    }

    public function destroy(): RedirectResponse
    {
        $this->profileService->destroy();

        return redirect()->route('login');
    }
}
