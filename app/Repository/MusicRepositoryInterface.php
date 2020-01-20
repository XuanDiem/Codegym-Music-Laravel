<?php


namespace App\Repository;


use Illuminate\Http\Request;

interface MusicRepositoryInterface
{
    public function getMusics();

    public function create($music);

    public function finById($id);

    public function update($music);

    public function delete($idMusic);

    public function getNewSongs();

    public function getVnSongs();

    public function likeSong($userId, $songId);

    public function disLikeSong($data);

    public function findSongInPivotTable($userId, $songId);
}
