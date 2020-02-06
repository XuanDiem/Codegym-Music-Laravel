<?php


namespace App\Service;


interface PlaylistServiceInterface
{
    public function create($request);

    public function getPlaylistsUserHasLiked($user);

    public function getUserPlaylist($userId);

    public function putSongToPlaylist($playlistId, $songId);

    public function removeSongFromPlaylist($playlistId, $songId);

    public function getSongsInPlaylist($playlistId);

    public function likePlaylist($playlistId);

    public function disLikePlaylist($playlistId);

    public function update($request, $playlistId);

}
