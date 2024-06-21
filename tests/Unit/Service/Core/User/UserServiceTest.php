<?php

namespace Tests\Unit\Service\Core\User;

use App\Models\User;
use App\Services\Core\User\UserService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class UserServiceTest extends TestCase
{
    use RefreshDatabase;

    protected UserService $userService;

    public function setUp(): void
    {
        parent::setUp();

        $this->userService = new UserService();
    }

    public function test_get_columns(): void
    {
        $this->assertIsArray($this->userService->getColumns());
    }

    public function test_get_roles_list(): void
    {
        $this->assertIsArray($this->userService->getRolesList());
    }

    public function test_store_user(): void
    {
        $this->assertInstanceOf(User::class, $this->userService->store([
            'name' => 'John Doe',
            'email' => 'w7N2g@example.com',
            'password' => 'password',
            'role' => 'user',
        ]));
    }

    public function test_update_user(): void
    {
        $user = User::factory()->create();

        $userUpdated = $this->userService->update($user, [
            'name' => 'John Doe',
            'email' => 'w7N2g@example.com',
            'password' => 'password',
            'role' => 'user',
        ]);

        $this->assertInstanceOf(User::class, $userUpdated);

        $this->assertEquals('John Doe', $userUpdated->name);
        $this->assertEquals('w7N2g@example.com', $userUpdated->email);
        $this->assertTrue(Hash::check('password', $userUpdated->password));
        $this->assertEquals('user', $userUpdated->roles->first()->name);
    }

    public function test_destroy_user(): void
    {
        $user = User::factory()->create();

        $this->assertTrue($this->userService->destroy($user));
    }
}
