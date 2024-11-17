<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->userData() as $user) {
            User::create($user);
        }
    }


    private function userData(): array
    {
        $users = [

            //1
            [
                'name' => 'Jennifer,Jimenez',
                'email' => 'jenn@email.com',
                'password' => bcrypt('pass@1234'),
                'type' => 'Admin',
            ],

            //2
            [
                'name' => 'Sherry Ann,Aldave',
                'email' => 'ann@email.com',
                'password' => bcrypt('pass@1234'),
                'type' => 'Admin',
            ],

            //3
            [
                'name' => 'Aron,Jumawan',
                'email' => 'aron@email.com',
                'password' => bcrypt('pass@1234'),
                'type' => 'Admin',
            ],

            //4
            [
                'name' => 'Joel,Gutlay',
                'email' => 'jo@email.com',
                'password' => bcrypt('pass@1234'),
                'type' => 'Admin',
            ],

            //5
            [
                'name' => 'Kean,Ramos',
                'email' => 'kean@email.com',
                'password' => bcrypt('pass@1234'),
                'type' => 'Admin',
            ],

            //------------------------------

            //6
            [
                'name' => 'John,Doe',
                'email' => 'john@email.com',
                'password' => bcrypt('123!@#'),
                'type' => 'User',
            ],

            //7
            [
                'name' => 'Jane,Doe',
                'email' => 'jane@email.com',
                'password' => bcrypt('123!@#'),
                'type' => 'User',
            ],

            //8
            [
                'name' => 'Roland,Smith',
                'email' => 'roland@email.com',
                'password' => bcrypt('123!@#'),
                'type' => 'User',
            ],

            //9
            [
                'name' => 'Kim,Smith',
                'email' => 'kim@email.com',
                'password' => bcrypt('123!@#'),
                'type' => 'User',
            ],

            //10
            [
                'name' => 'Mark,Smith',
                'email' => 'mark@email.com',
                'password' => bcrypt('123!@#'),
                'type' => 'User',
            ],

        ];


        return $users;
    }
}
