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
}
