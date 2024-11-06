<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin users
        User::create([
            'name' => 'Joel Gutlay',
            'email' => 'joel.gutlay@email.com', // Use a valid email
            'role' => 'Admin',
            'Avatar' => 'joel_default.jpg',
            'status' => 'Active',
            'password' => bcrypt('pass@1234'), // Use a hashed password
        ]);

        User::create([
            'name' => 'Ann Aldave',
            'email' => 'ann.aldave@email.com', // Use a valid email
            'role' => 'Admin',
            'Avatar' => 'ann_default.jpg',
            'status' => 'In Active',
            'password' => bcrypt('pass@1234'),
        ]);

        User::create([
            'name' => 'Aron Jumawan',
            'email' => 'aron.jumawan@email.com', // Use a valid email
            'role' => 'Admin',
            'Avatar' => 'aron_default.jpg',
            'status' => 'In Active',
            'password' => bcrypt('pass@1234'),
        ]);

        // Create regular users
        $regularUsers = [
            'John Doe',
            'Jane Smith',
            'Alex Johnson',
            'Emily Davis',
            'Michael Brown',
            'Sarah Wilson',
            'David Miller',
            'Laura Garcia',
            'Robert Martinez',
            'Jessica Taylor',
        ];

        foreach ($regularUsers as $name) {
            User::create([
                'name' => $name,
                'email' => strtolower(str_replace(' ', '.', $name)) . '@example.com', // Generate a unique email
                'role' => 'User',
                'Avatar' => 'user_default.jpg',
                'status' => ('Sarah Wilson' == $name ||
                    'David Miller' == $name ||
                    'Laura Garcia' == $name) ? 'In Active' : "Active",
                'password' => Hash::make('pass@1234'), // Use a hashed password
            ]);
        }
    }
}
