<?php

use Illuminate\Database\Seeder;

class UserSongLiked extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_song')->insert([
            'user_id'=>1,
            'music_id'=>1,
        ]);
        DB::table('user_song')->insert([
            'user_id'=>2,
            'music_id'=>1,
        ]);
        DB::table('user_song')->insert([
            'user_id'=>3,
            'music_id'=>1,
        ]);
        DB::table('user_song')->insert([
            'user_id'=>4,
            'music_id'=>1,
        ]);
        DB::table('user_song')->insert([
            'user_id'=>5,
            'music_id'=>1,
        ]);
        DB::table('user_song')->insert([
            'user_id'=>2,
            'music_id'=>2,
        ]);
        DB::table('user_song')->insert([
            'user_id'=>3,
            'music_id'=>2,
        ]);
        DB::table('user_song')->insert([
            'user_id'=>4,
            'music_id'=>2,
        ]);
        DB::table('user_song')->insert([
            'user_id'=>5,
            'music_id'=>2,
        ]);
        DB::table('user_song')->insert([
            'user_id'=>3,
            'music_id'=>3,
        ]);
        DB::table('user_song')->insert([
            'user_id'=>4,
            'music_id'=>3,
        ]);
        DB::table('user_song')->insert([
            'user_id'=>5,
            'music_id'=>3,
        ]);
        DB::table('user_song')->insert([
            'user_id'=>4,
            'music_id'=>4,
        ]);
        DB::table('user_song')->insert([
            'user_id'=>5,
            'music_id'=>4,
        ]);
        DB::table('user_song')->insert([
            'user_id'=>5,
            'music_id'=>5,
        ]);
    }
}
