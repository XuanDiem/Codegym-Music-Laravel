<?php


namespace App\Service;


interface PlaylistServiceInterface
{
    public function create($request);

    public function getUserPlaylist($userId);

    public function putSongToPlaylist($playlistId, $songId);

}
