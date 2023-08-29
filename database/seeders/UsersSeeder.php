<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminUser = User::create([
            'id'              => 1,
            'name'              => 'admin',
            'email'             => 'admin@admin.com',
            'password'          => Hash::make('admin'),
            'role'              => 'admin',
        ]);

        $storeUser = User::create([
            'id'              => 2,
            'name'              => 'store',
            'email'             => 'store@user.com',
            'password'          => Hash::make('store'),
            'role'              => 'store',
        ]);
    }
}
