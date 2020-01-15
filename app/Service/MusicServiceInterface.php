<?php


namespace App\Service\impl;


use Illuminate\Http\Request;

interface MusicServiceInterface
{
    public function getMusics();

    public function create(Request $request);

    public function update(Request $request, $id);

    public function delete($id);

    public function getSong($id);

    public function likeSong($userId, $songId);

    public function disLikeSong($userId, $songId);

    public function increaseViews($songId);

    public function getSongsUserHasLiked($user);

    public function getNewSongs();
}
