<?php

namespace App\Http\Controllers\Web\Core\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\Core\User\UserService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class UserController extends Controller
{
    public function __construct(protected UserService $userService)
    {
    }

    public function index(): View
    {
        $data = [
            'users' => $this->userService->list(),
        ];

        return view('core.user.index', $data);
    }

    public function create(): View
    {
        return view('core.user.create');
    }

    public function destroy(User $user): RedirectResponse
    {
        $this->userService->destroy($user);

        return redirect()->route('core.users.index');
    }
}
