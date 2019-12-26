<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    public function playlists()
    {
        return $this->belongsToMany(Playlist::class, 'playlist_music');
    }
    //
}
