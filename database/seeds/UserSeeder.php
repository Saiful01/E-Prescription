<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'full_name' => "Motiur",
            'user_login' => "memotiur",
            'email' => "memotiur@gmail.com",
            'phone' => "01825136985",
            'password' => Hash::make('123456'),
            'is_admin' => true,
            'is_active' => true,
        ]);

    }
}
