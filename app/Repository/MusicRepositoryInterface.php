<?php


namespace App\Repository;


use Illuminate\Http\Request;

interface MusicRepositoryInterface
{
    public function getAll();

    public function createSong($song);

    public function updateSong(Request $request, $id);

    public function destroySong($id);
}
