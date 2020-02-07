<?php


namespace App\Repository\impl;


use App\Repository\SingerRepositoryInterface;
use App\Singer;

class SingerRepository implements SingerRepositoryInterface
{
    public function getSingers()
    {
        $singers = Singer::with('user')->get();
        return $singers;
    }

    public function create($singer)
    {
        return $singer->save();
    }

    public function getSinger($singerId)
    {
        return Singer::findOrFail($singerId);
    }

//    public function finById($id)
//    {
//        return $music = Music::find($id);
//    }
//
//    public function update($music)
//    {
//        return $music->save();
//    }
//
//    public function delete($idMusic)
//    {
//        return $idMusic->delete();
//    }
}
