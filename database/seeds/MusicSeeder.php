<?php

use App\Music;
use Illuminate\Database\Seeder;

class MusicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $music = new Music();
        $music->name = 'Thay tôi yêu cô ấy';
        $music->description = '
        Bài hát: Thay Tôi Yêu Cô Ấy (ĐNSTĐ) | Thanh Hưng | Official Music Video
       - Composer & Singer: Thanh Hưng';
        $music->file_mp3 = '/assets/file-mp3/ThayToiYeuCoAyDinhLongRemix-ThanhHungIdolDJ-6054427.mp3';
        $music->avatar = '../../assets/images/thanh-hung.jpg';
        $music->save();

    }
}
