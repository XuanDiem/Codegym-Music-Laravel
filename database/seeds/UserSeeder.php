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
            'name'=>'admin',
            'email'=>'admin@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password')
        ]);
    }
}
