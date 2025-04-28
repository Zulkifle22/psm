<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Admin
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        // Create 5 Coordinators
        for ($i = 1; $i <= 5; $i++) {
            User::create([
                'name' => "Coordinator {$i}",
                'email' => "coordinator{$i}@example.com",
                'password' => Hash::make('password123'),
                'role' => 'coordinator',
            ]);
        }

        // Create 4 Volunteers
        for ($i = 1; $i <= 4; $i++) {
            User::create([
                'name' => "Volunteer {$i}",
                'email' => "volunteer{$i}@example.com",
                'password' => Hash::make('password123'),
                'role' => 'volunteer',
            ]);
        }

        // Create 5 Victims
        for ($i = 1; $i <= 5; $i++) {
            User::create([
                'name' => "Victim {$i}",
                'email' => "victim{$i}@example.com",
                'password' => Hash::make('password123'),
                'role' => 'victim',
            ]);
        }
    }
}