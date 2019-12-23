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