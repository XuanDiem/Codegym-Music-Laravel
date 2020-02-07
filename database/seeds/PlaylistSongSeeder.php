<?php

use Illuminate\Database\Seeder;

class PlaylistSongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('playlist_music')->insert([
            'playlist_id' => 1,
            'music_id' => 1,
        ]);
        DB::table('playlist_music')->insert([
            'playlist_id' => 1,
            'music_id' => 2,
        ]);
        DB::table('playlist_music')->insert([
            'playlist_id' => 1,
            'music_id' => 3,
        ]);
        DB::table('playlist_music')->insert([
            'playlist_id' => 2,
            'music_id' => 4,
        ]);
        DB::table('playlist_music')->insert([
            'playlist_id' => 2,
            'music_id' => 5,
        ]);
        DB::table('playlist_music')->insert([
            'playlist_id' => 2,
            'music_id' => 6,
        ]);
    }
}
