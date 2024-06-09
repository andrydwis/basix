<?php

namespace App\Services\Core\User;

use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Hash;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class UserService
{
    public function __construct()
    {
        //
    }

    public function list(): LengthAwarePaginator
    {
        return QueryBuilder::for(User::class)
            ->allowedFilters([AllowedFilter::callback('search', function ($query, $search) {
                $query->whereAny([
                    'name',
                    'email',
                    'phone',
                ], 'ilike', '%' . $search . '%');
            })])
            ->allowedSorts(['name'])
            ->defaultSort('-created_at')
            ->with(['roles'])
            ->paginate(10);
    }

    public function store(array $data): User
    {
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = $data['password'] ? Hash::make($data['password']) : null;
        $user->phone = $data['phone'] ?? null;
        $user->save();

        session()->flash('success', 'Berhasil menambahkan data pengguna');

        return $user;
    }

    public function update(User $user, array $data): User
    {
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = $data['password'] ? Hash::make($data['password']) : $user->password;
        $user->phone = $data['phone'] ?? null;
        $user->save();

        session()->flash('success', 'Berhasil memperbarui data pengguna');

        return $user;
    }

    public function destroy(User $user): void
    {
        $user->delete();

        session()->flash('success', 'Berhasil menghapus data pengguna');
    }
}
