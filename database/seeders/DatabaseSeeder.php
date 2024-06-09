<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //add 1000 user and assign to random role
        User::factory(1000)->create()->each(function ($user) {
            $user->assignRole(['super-admin', 'user'][rand(0, 1)]);
        });
    }
}
