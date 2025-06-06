<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ownerRole = Role::create([
            'name' => 'owner'
        ]);
        $buyerRole = Role::create([
            'name' => 'buyer'
        ]);

        $user = User::create([
            'name' => 'Bapak Pemilik',
            'email' => 'Bapak@owner.com',
            'password' => bcrypt('123123123')
        ]);

        $user->assignRole($ownerRole);
    }
}
