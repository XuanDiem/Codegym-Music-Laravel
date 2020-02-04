<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Singer extends Model
{
    public function songs()
    {
        return $this->belongsToMany(Music::class, 'singer_song')->with('singers');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
