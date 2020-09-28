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
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Admin'
        ]);
    }
}
