<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
               'name'=>'Admin',
               'email'=>'admin@codespace.com',
               'role'=>2,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Tutor',
               'email'=>'tutor@codespace.com',
               'role'=> 1,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Student',
               'email'=>'student@codespace.com',
               'role'=>0,
               'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Employer',
                'email'=>'employer@codespace.com',
                'role'=>3,
                'password'=> bcrypt('123456'),
             ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
