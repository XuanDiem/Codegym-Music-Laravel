<?php /** @noinspection ALL */


namespace App\Repository\impl;


use App\Music;
use App\Repository\MusicRepositoryInterface;
use Illuminate\Http\Request;

class MusicRepository implements MusicRepositoryInterface
{
    public function getAll()
    {
        return $song = Music::all();
    }

    public function createSong($song)
    {
        return $song->save();
    }

    public function updateSong(Request $request, $id)
    {
        return $song->save();
    }

    public function destroySong($id)
    {
    }
}
