<?php /** @noinspection ALL */


namespace App\Repository\impl;


use App\Music;
use App\Repository\MusicRepositoryInterface;
use Illuminate\Http\Request;

class MusicRepository implements MusicRepositoryInterface
{
    public function getMusics()
    {
        $musics = Music::all();
        return $musics;
    }

    public function getVnSongs()
    {
        $songs = Music::where('category', 'Vn')->paginate(6);

        return $songs;
    }

    public function getUsSongs()
    {
        $songs = Music::where('category', 'Us')->paginate(6);

        return $songs;
    }

    public function getNewSongs()
    {
        $songs = Music::paginate(6);
        return $songs;
    }

    public function create($music)
    {
        return $music->save();
    }

    public function finById($id)
    {
        return $music = Music::find($id);
    }

    public function update($music)
    {
        return $music->save();
    }

    public function delete($idMusic)
    {
        return $idMusic->delete();
    }
}
