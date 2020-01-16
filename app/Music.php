<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function playlists()
    {
        return $this->belongsToMany(Playlist::class, 'playlist_music');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
