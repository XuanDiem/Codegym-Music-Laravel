<?php /** @noinspection ALL */


namespace App\Repository\impl;


use App\Music;
use App\Repository\MusicRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function likeSong($userId, $songId)
    {
        return $data = DB::table('user_song')->insert([
            'user_id' => $userId,
            'music_id' => $songId,
        ]);
    }

    public function disLikeSong($data)
    {
        return DB::table('user_song')->delete($data->id);
    }

    public function findSongInPivotTable($userId, $songId)
    {
        $data = DB::table('user_song')
            ->where('user_id', $userId)
            ->where('music_id', $songId)->first();
        return $data;
    }
}
