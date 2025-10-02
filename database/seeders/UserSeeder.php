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
        // Admin user
        User::create([
            'first_name' => 'System',
            'last_name' => 'Admin',
            'usn' => 'ADMIN001',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'),
            'phone_number' => '09171234567',
            'role' => 2, // Admin
            'is_active' => true,
        ]);

        // Teacher user
        User::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'usn' => 'TEACH001',
            'email' => 'teacher@example.com',
            'password' => Hash::make('teacher123'),
            'phone_number' => '09181234567',
            'role' => 1, // Teacher
            'is_active' => true,
        ]);

        // Student user
        User::create([
            'first_name' => 'Jane',
            'last_name' => 'Smith',
            'usn' => 'STUD001',
            'email' => 'student@example.com',
            'password' => Hash::make('student123'),
            'phone_number' => '09191234567',
            'role' => 0, // Student
            'is_active' => true,
        ]);
    }
}
