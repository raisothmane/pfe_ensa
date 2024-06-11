<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "username" => "admin",
            "email" => "admin@gmail.com",
            "user_type" => "admin",
            "password" => bcrypt("password"),
        ]);
        User::create([
            "username" => "user1",
            "email" => "user1@gmail.com",
            "password" => bcrypt("password"),
        ]);
        User::create([
            "username" => "user2",
            "email" => "user2@gmail.com",
            "password" => bcrypt("password"),
        ]);
        User::create([
            "username" => "user3",
            "email" => "user3@gmail.com",
            "password" => bcrypt("password"),
        ]);
        User::create([
            "username" => "user4",
            "email" => "user4@gmail.com",
            "password" => bcrypt("password"),
        ]);
        User::create([
            "username" => "user5",
            "email" => "user5@gmail.com",
            "password" => bcrypt("password"),
        ]);
        User::create([
            "username" => "user6",
            "email" => "user6@gmail.com",
            "password" => bcrypt("password"),
        ]);
        User::create([
            "username" => "user7",
            "email" => "user7@gmail.com",
            "password" => bcrypt("password"),
        ]);
        User::create([
            "username" => "user8",
            "email" => "user8@gmail.com",
            "password" => bcrypt("password"),
        ]);
        User::create([
            "username" => "user9",
            "email" => "user9@gmail.com",
            "password" => bcrypt("password"),
        ]);
        User::create([
            "username" => "user10",
            "email" => "user10@gmail.com",
            "password" => bcrypt("password"),
        ]);
        User::create([
            "username" => "user11",
            "email" => "user11@gmail.com",
            "password" => bcrypt("password"),
        ]);
    }
}
