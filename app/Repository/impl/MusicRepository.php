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

    public function getVnSongs()
    {
        $songs = Music::with('singers')->where('category', 'Vn')->paginate(5);

        return $songs;
    }

    public function getUsSongs()
    {
        $songs = Music::with('singers')->where('category', 'Us')->paginate(5);

        return $songs;
    }

    public function getFavoriteSongs()
    {
        return DB::select('select count(user_id) as likesCount, music_id from user_song group by music_id order by
 likesCount desc limit 0,5;');
    }

    public function getTopViewsSong()
    {
        return Music::orderBy('views', 'desc')->with('singers')->paginate(5);
    }

    public function getNewSongs()
    {
        $songs = Music::with('singers')->orderBy('created_at', 'desc')->paginate(5);
        return $songs;
    }

    public function create($music)
    {
        return $music->save();
    }

    public function createSingers($music, $value)
    {
        DB::table('singer_song')->insert([
            'music_id' => $music->id,
            'singer_id' => $value
        ]);
    }

    public function finById($id)
    {
        return $music = Music::with('singers')->find($id);
    }

    public function update($music)
    {
        return $music->save();
    }

    public function deleteOldSingers($id)
    {
        DB::table('singer_song')->where('music_id', $id)->delete();
    }

    public function delete($idMusic)
    {
        return $idMusic->delete();
    }

    public function likeSong($userId, $songId)
    {
        if ($this->checkDataExist($userId, $songId)) {
            return;
        }
        return $this->insertToDatabase($userId, $songId);
    }

    public function checkDataExist($userId, $songId)
    {
        $data = DB::table('user_song')->where('user_id', $userId)->Where('music_id', $songId)
            ->first();
        return $data;
    }

    public function insertToDatabase($userId, $songId)
    {
        if (DB::table('user_song')->insert([
            'user_id' => $userId,
            'music_id' => $songId,
        ])) {
            return ['songId' => $songId];
        }
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
