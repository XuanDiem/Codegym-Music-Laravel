<?php


namespace App\Repository\impl;


use App\Playlist;
use App\Repository\PlaylistRepositoryInterface;
use Illuminate\Support\Facades\DB;

class PlaylistRepository implements PlaylistRepositoryInterface
{
    public function create($request)
    {
        return Playlist::create($request->all());
    }

    public function getPlaylists($userId)
    {
        // TODO: Implement getPlaylists() method.
    }

    public function putSongToPlaylist($playlistId, $songId)
    {
        return $playlist = DB::table('playlist_music')->insert([
            'playlist_id' => $playlistId,
            'music_id' => $songId,
        ]);
    }

    public function removeSongFromPlaylist($playlistId, $songId)
    {
        return $playlist = DB::table('playlist_music')
            ->where('playlist_id', $playlistId)
            ->where('music_id', $songId)
            ->delete();
    }

    public function getPlaylist($playlistId)
    {
        return Playlist::findOrFail($playlistId);
    }

    public function update($playlist)
    {
        return $playlist->save();
    }

    public function store($playlist)
    {
        return $playlist->save();
    }

    public function findSongInPivotTable($userId, $playlistId)
    {
        $data = DB::table('user_playlist')
            ->where('user_id', $userId)
            ->where('playlist_id', $playlistId)->first();
        return $data;
    }

    public function likePlaylist($playlistId)
    {
        if ($this->checkDataExist(auth('api')->user()->id, $playlistId)) {
            return 'record is already existence';
        }
        return $this->insertToDatabase(auth('api')->user()->id, $playlistId);
    }

    public function insertToDatabase($userId, $playlistId)
    {
        if (DB::table('user_playlist')->insert([
            'user_id' => $userId,
            'playlist_id' => $playlistId,
        ])) {
            return ['playlistId' => $playlistId];
        }
    }

    public function checkDataExist($userId, $playlistId)
    {
        $data = DB::table('user_playlist')->where('user_id', $userId)->Where('playlist_id', $playlistId)
            ->first();
        return $data;
    }

    public function disLikePlaylist($data)
    {
        return DB::table('user_playlist')->delete($data->id);
    }
}
