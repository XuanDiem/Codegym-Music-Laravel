<?php

use Illuminate\Database\Seeder;

class SingerSongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('singer_song')->insert([
            'singer_id' => 1,
            'music_id' => 1
        ]);
        \Illuminate\Support\Facades\DB::table('singer_song')->insert([
            'singer_id' => 2,
            'music_id' => 2
        ]);
        \Illuminate\Support\Facades\DB::table('singer_song')->insert([
            'singer_id' => 3,
            'music_id' => 3
        ]);
        \Illuminate\Support\Facades\DB::table('singer_song')->insert([
            'singer_id' => 4,
            'music_id' => 4
        ]);
        \Illuminate\Support\Facades\DB::table('singer_song')->insert([
            'singer_id' => 5,
            'music_id' => 5
        ]);
        \Illuminate\Support\Facades\DB::table('singer_song')->insert([
            'singer_id' => 6,
            'music_id' => 6
        ]);
        \Illuminate\Support\Facades\DB::table('singer_song')->insert([
            'singer_id' => 7,
            'music_id' => 7
        ]);
        \Illuminate\Support\Facades\DB::table('singer_song')->insert([
            'singer_id' => 8,
            'music_id' => 7
        ]);
        \Illuminate\Support\Facades\DB::table('singer_song')->insert([
            'singer_id' => 9,
            'music_id' => 8
        ]);
        \Illuminate\Support\Facades\DB::table('singer_song')->insert([
            'singer_id' => 10,
            'music_id' => 8
        ]);
        \Illuminate\Support\Facades\DB::table('singer_song')->insert([
            'singer_id' => 11,
            'music_id' => 9
        ]);
        \Illuminate\Support\Facades\DB::table('singer_song')->insert([
            'singer_id' => 13,
            'music_id' => 10
        ]);
        \Illuminate\Support\Facades\DB::table('singer_song')->insert([
            'singer_id' => 10,
            'music_id' => 13
        ]);
        \Illuminate\Support\Facades\DB::table('singer_song')->insert([
            'singer_id' => 14,
            'music_id' => 11
        ]);
        \Illuminate\Support\Facades\DB::table('singer_song')->insert([
            'singer_id' => 12,
            'music_id' => 11
        ]);
    }
}
