<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ownerRole = Role::create([
            'name' => 'owner'
        ]
        );

        $buyerRole = Role::create([
            'name' => 'buyer'
        ]
        );

        $user = User::create([
            'name' => 'RyuuAdmin',
            'email' => 'ryuuadmin@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $user->assignRole($ownerRole);
    }
}