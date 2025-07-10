<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Arjun Gunawan',
            'title' => 'Software Engineer',
            'username' => env('APP_USERNAME'),
            'email' => 'arjun.gnw09@gmail.com',
            'password' => Hash::make(env('APP_PASSWORD')),
            'email_verified_at' => now(),
            'profile_picture' => 'https://i.pravatar.cc/500',
            'description' => 'lorem ipsum aja ya',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
