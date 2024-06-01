<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Create an admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // change this to a secure password
            'remember_token' => Str::random(10),
            'role' => 'admin', // assuming you have a role column in your users table
        ]);

        // Create a test user
        User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // change this to a secure password
            'remember_token' => Str::random(10),
            'role' => 'employee', // assuming you have a role column in your users table
        ]);

        // Create additional random users if needed
        User::factory()->count(10)->create();
    }
}
