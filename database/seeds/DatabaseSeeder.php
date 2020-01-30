<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(SingerSeeder::class);
        $this->call(MusicSeeder::class);
        $this->call(SingerSongSeeder::class);
        $this->call(PlaylistSeeder::class);

    }
}
