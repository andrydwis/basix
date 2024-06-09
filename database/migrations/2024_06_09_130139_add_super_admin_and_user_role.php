<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        \Spatie\Permission\Models\Role::create(['name' => 'super-admin']);
        \Spatie\Permission\Models\Role::create(['name' => 'user']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        \Spatie\Permission\Models\Role::query()->where('name', 'super-admin')->delete();
        \Spatie\Permission\Models\Role::query()->where('name', 'user')->delete();
    }
};
