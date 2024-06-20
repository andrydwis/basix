<?php

namespace App\Services\Core\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function update(array $data): User
    {
        $user = auth()->user();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->phone = $data['phone'] ?? null;
        $user->password = $data['password'] ? Hash::make($data['password']) : $user->password;
        $user->save();

        session()->flash('success', 'Profil berhasil diperbarui');

        return $user;
    }

    public function destroy(): void
    {
        $user = auth()->user();
        $user->delete();

        auth()->logout();
    }
}
