<?php

use Illuminate\Database\Seeder;

class UserPlaylistLiked extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_playlist')->insert([
            'user_id'=>1,
            'playlist_id'=>2,
        ]);
        DB::table('user_playlist')->insert([
            'user_id'=>1,
            'playlist_id'=>3,
        ]);
        DB::table('user_playlist')->insert([
            'user_id'=>1,
            'playlist_id'=>4,
        ]);
    }
}
