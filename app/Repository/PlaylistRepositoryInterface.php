<?php


namespace App\Repository;


interface PlaylistRepositoryInterface
{
    public function create($request);

    public function likePlaylist($playlistId);

    public function disLikePlaylist($data);

    public function findSongInPivotTable($userId, $songId);

    public function store($playlist);

    public function getPlaylists($userId);

    public function getPlaylist($playlistId);

    public function putSongToPlaylist($playlistId, $songId);

    public function removeSongFromPlaylist($playlistId, $songId);

    public function update($playlist);
}
