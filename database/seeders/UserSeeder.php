<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create or update Admin user
        $admin = User::updateOrCreate(
            ['email' => 'admin@volt.com'],
            [
                'first_name' => 'Admin',
                'last_name' => 'User',
                'password' => Hash::make('secret'),
                'role_id' => 1,
                'status' => 'Active',
                'avatar' => 'profile-picture-1.jpg',
                'created_at' => now(),
            ]
        );
        $admin->assignRole('Admin');

        // Create or update Creator user
        $creator = User::updateOrCreate(
            ['email' => 'creator@volt.com'],
            [
                'first_name' => 'Creator',
                'last_name' => 'User',
                'password' => Hash::make('secret'),
                'role_id' => 2,
                'status' => 'Active',
                'avatar' => 'profile-picture-2.jpg',
                'created_at' => now(),
            ]
        );
        $creator->assignRole('Creator'); // Assuming there is a 'Creator' role

        // Create or update Member user
        $member = User::updateOrCreate(
            ['email' => 'member@volt.com'],
            [
                'first_name' => 'Member',
                'last_name' => 'User',
                'password' => Hash::make('secret'),
                'role_id' => 3,
                'status' => 'Active',
                'avatar' => 'profile-picture-7.jpg',
                'created_at' => now(),
            ]
        );
        $member->assignRole('Member'); // Assuming there is a 'Member' role
    }
}
