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
        \App\User::create([
            'name'=>'Camila Cabello',
            'email'=>'camilacabello@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password')
        ]);
        \App\User::create([
            'name'=>'Aqua',
            'email'=>'aqua@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password')
        ]);
        \App\User::create([
            'name'=>'Cascada',
            'email'=>'cascada@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password')
        ]);
        \App\User::create([
            'name'=>'Celine',
            'email'=>'celine@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password')
        ]);
        \App\User::create([
            'name'=>'Friend Lenka',
            'email'=>'friendlenka@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password')
        ]);
        \App\User::create([
            'name'=>'Avicii John',
            'email'=>'aviciijohn@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password')
        ]);
        \App\User::create([
            'name'=>'Trung Quân Idol',
            'email'=>'trungquan@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password')
        ]);
        \App\User::create([
            'name'=>'Bảo Anh',
            'email'=>'baoanh@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password')
        ]);
        \App\User::create([
            'name'=>'Đạt G',
            'email'=>'datG@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password')
        ]);
        \App\User::create([
            'name'=>'Du Uyên',
            'email'=>'duuyen@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password')
        ]);
        \App\User::create([
            'name'=>'Quang Vinh',
            'email'=>'quangvinh@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password')
        ]);
        \App\User::create([
            'name'=>'Jokes Bii',
            'email'=>'jokesbii@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password')
        ]);
        \App\User::create([
            'name'=>'Đức Phúc',
            'email'=>'ducphuc@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password')
        ]);
        \App\User::create([
            'name'=>'Phát Hồ',
            'email'=>'phatho@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password')
        ]);
    }
}
