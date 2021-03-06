<?php


namespace App\Service\impl;


use Illuminate\Http\Request;

interface MusicServiceInterface
{
    public function getMusics();

    public function create(Request $request);

    public function update(Request $request, $id);

    public function getTopViewsSong();

    public function getFavoriteSongs();

    public function delete($id);

    public function getSong($id);

    public function getSingerSongs($singerId);

    public function likeSong($userId, $songId);

    public function disLikeSong($userId, $songId);

    public function increaseViews($songId);

    public function getSongsUserHasLiked($user);

    public function getNewSongs();

    public function getVnSongs();

    public function getUserSongs($request);
}
