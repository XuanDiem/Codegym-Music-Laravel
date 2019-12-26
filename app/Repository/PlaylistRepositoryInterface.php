<?php


namespace App\Repository;


interface PlaylistRepositoryInterface
{
    public function create($request);

    public function getPlaylists($userId);

    public function putSongToPlaylist($playlistId, $songId);
}
