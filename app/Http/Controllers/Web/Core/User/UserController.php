<?php

namespace App\Http\Controllers\Web\Core\User;

use App\Http\Controllers\Controller;
use App\Services\Core\User\UserService;

class UserController extends Controller
{
    public function __construct(protected UserService $userService)
    {
    }

    public function index()
    {
        $data = [
            'users' => $this->userService->list(),
        ];

        return view('core.user.index', $data);
    }
}
