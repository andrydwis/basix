<?php

namespace App\Http\Controllers\Web\Core\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Core\User\StoreUserRequest;
use App\Http\Requests\Core\User\UpdateUserRequest;
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
            'columns' => $this->userService->getColumns(),
            'users' => $this->userService->list(),
            'roles' => $this->userService->getRolesList(),
        ];

        return view('core.user.index', $data);
    }

    public function create(): View
    {
        $data = [
            'roles' => $this->userService->getRolesList(),
        ];

        return view('core.user.create', $data);
    }

    public function store(StoreUserRequest $request): RedirectResponse
    {
        $this->userService->store($request->validated());

        return redirect()->route('core.users.index');
    }

    public function edit(User $user): View
    {
        $data = [
            'user' => $user,
            'roles' => $this->userService->getRolesList(),
        ];

        return view('core.user.edit', $data);
    }

    public function update(UpdateUserRequest $request, User $user): RedirectResponse
    {
        $this->userService->update($user, $request->validated());

        return redirect()->route('core.users.index');
    }

    public function destroy(User $user): RedirectResponse
    {
        $this->userService->destroy($user);

        return redirect()->route('core.users.index');
    }
}
