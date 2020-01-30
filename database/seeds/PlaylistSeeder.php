<?php

use Illuminate\Database\Seeder;

class PlaylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $playlist = new \App\Playlist();
        $playlist->user_id = 2;
        $playlist->namePlaylist = 'playlistName2';
        $playlist->save();
        $playlist = new \App\Playlist();
        $playlist->user_id = 3;
        $playlist->namePlaylist = 'playlistName3';
        $playlist->save();
        $playlist = new \App\Playlist();
        $playlist->user_id = 4;
        $playlist->namePlaylist = 'playlistName4';
        $playlist->save();
        $playlist = new \App\Playlist();
        $playlist->user_id = 5;
        $playlist->namePlaylist = 'playlistName5';
        $playlist->save();
        $playlist = new \App\Playlist();
        $playlist->user_id = 6;
        $playlist->namePlaylist = 'playlistName6';
        $playlist->save();
        $playlist = new \App\Playlist();
        $playlist->user_id = 7;
        $playlist->namePlaylist = 'playlistName7';
        $playlist->save();
    }
}
