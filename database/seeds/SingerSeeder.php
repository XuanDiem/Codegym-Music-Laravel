<?php

use Illuminate\Database\Seeder;

class SingerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $singer = new \App\Singer();
        $singer->user_id = 2;
        $singer->name = 'Camila Cabello';
        $singer->avatar = 'https://firebasestorage.googleapis.com/v0/b/codegym-music-d1055.appspot.com/o/music%2Fdownload.jpeg?alt=media&token=8c6ceb71-e7db-4298-959e-1be8808e8df5';
        $singer->description = 'description';
        $singer->singerGender = 'FeMale';
        $singer->singerNickName = 'singerNickName';
        $singer->save();

        $singer = new \App\Singer();
        $singer->user_id = 3;
        $singer->name = 'Aqua';
        $singer->avatar = 'https://firebasestorage.googleapis.com/v0/b/codegym-music-d1055.appspot.com/o/music%2FAqua.png?alt=media&token=c86e491d-0d48-4351-b70f-d5da4e2d8b69';
        $singer->description = 'description';
        $singer->singerGender = 'Team';
        $singer->singerNickName = 'singerNickName';
        $singer->save();

        $singer = new \App\Singer();
        $singer->user_id = 4;
        $singer->name = 'Cascada';
        $singer->avatar = 'https://firebasestorage.googleapis.com/v0/b/codegym-music-d1055.appspot.com/o/music%2FCascada.jpg?alt=media&token=db5c4384-3df5-4a2a-8ce8-20dc52fa8b35';
        $singer->description = 'description';
        $singer->singerGender = 'Male';
        $singer->singerNickName = 'singerNickName';
        $singer->save();

        $singer = new \App\Singer();
        $singer->user_id = 5;
        $singer->name = 'Celine';
        $singer->avatar = 'https://firebasestorage.googleapis.com/v0/b/codegym-music-d1055.appspot.com/o/music%2FCascada.jpg?alt=media&token=db5c4384-3df5-4a2a-8ce8-20dc52fa8b35';
        $singer->description = 'description';
        $singer->singerGender = 'FeMale';
        $singer->singerNickName = 'singerNickName';
        $singer->save();

        $singer = new \App\Singer();
        $singer->user_id = 6;
        $singer->name = 'Friend Lenka';
        $singer->avatar = 'https://firebasestorage.googleapis.com/v0/b/codegym-music-d1055.appspot.com/o/music%2Flenka.png?alt=media&token=e0fd1b58-7360-4fd3-970c-c9388439ecc1';
        $singer->description = 'description';
        $singer->singerGender = 'FeMale';
        $singer->singerNickName = 'singerNickName';
        $singer->save();

        $singer = new \App\Singer();
        $singer->user_id = 7;
        $singer->name = 'Friend Martin Garrix Avicii John Legend';
        $singer->avatar = 'https://firebasestorage.googleapis.com/v0/b/codegym-music-d1055.appspot.com/o/music%2FAvicii.jpeg?alt=media&token=d6dbcc7a-0e66-4abc-8baf-daa7eda9215c';
        $singer->description = 'description';
        $singer->singerGender = 'Male';
        $singer->singerNickName = 'singerNickName';
        $singer->save();

        $singer = new \App\Singer();
        $singer->user_id = 8;
        $singer->name = 'Trung Quân Idol';
        $singer->avatar = '';
        $singer->description = 'description';
        $singer->singerGender = 'Male';
        $singer->singerNickName = 'singerNickName';
        $singer->save();

        $singer = new \App\Singer();
        $singer->user_id = 9;
        $singer->name = 'Bảo Anh';
        $singer->avatar = '';
        $singer->description = 'description';
        $singer->singerGender = 'Male';
        $singer->singerNickName = 'singerNickName';
        $singer->save();

        $singer = new \App\Singer();
        $singer->user_id = 10;
        $singer->name = 'Đạt G';
        $singer->avatar = '';
        $singer->description = 'description';
        $singer->singerGender = 'Male';
        $singer->singerNickName = 'singerNickName';
        $singer->save();

        $singer = new \App\Singer();
        $singer->user_id = 11;
        $singer->name = 'Du Uyên';
        $singer->avatar = '';
        $singer->description = 'description';
        $singer->singerGender = 'FeMale';
        $singer->singerNickName = 'singerNickName';
        $singer->save();

        $singer = new \App\Singer();
        $singer->user_id = 12;
        $singer->name = 'Quang Vinh';
        $singer->avatar = 'https://firebasestorage.googleapis.com/v0/b/codegym-music-d1055.appspot.com/o/music%2FQuang-Vinh.jpg?alt=media&token=56f3d2a3-fe4b-4064-8ea1-6ce1c94323d0';
        $singer->description = 'description';
        $singer->singerGender = 'Male';
        $singer->singerNickName = 'singerNickName';
        $singer->save();

        $singer = new \App\Singer();
        $singer->user_id = 13;
        $singer->name = 'Jokes Bii';
        $singer->avatar = '';
        $singer->description = 'description';
        $singer->singerGender = 'Male';
        $singer->singerNickName = 'singerNickName';
        $singer->save();

        $singer = new \App\Singer();
        $singer->user_id = 14;
        $singer->name = 'Đức Phúc';
        $singer->avatar = '';
        $singer->description = 'description';
        $singer->singerGender = 'Male';
        $singer->singerNickName = 'singerNickName';
        $singer->save();

        $singer = new \App\Singer();
        $singer->user_id = 15;
        $singer->name = 'Phát Hồ';
        $singer->avatar = '';
        $singer->description = 'description';
        $singer->singerGender = 'FeMale';
        $singer->singerNickName = 'singerNickName';
        $singer->save();
    }
}
