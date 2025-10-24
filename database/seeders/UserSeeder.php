<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Abdul Rehman Wakeel',
                'email' => 'rehman@example.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Ali Raza',
                'email' => 'ali@example.com',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Ayesha Khan',
                'email' => 'ayesha@example.com',
                'password' => bcrypt('mypassword'),
            ],
            [
                'name' => 'Usman Ahmed',
                'email' => 'usman@example.com',
                'password' => bcrypt('usman123'),
            ],
        ]);
    }
}
