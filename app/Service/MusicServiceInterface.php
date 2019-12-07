<?php


namespace App\Service;


use Illuminate\Http\Request;

interface MusicServiceInterface
{
    public function getAll();

    public function createSong(Request $request);

    public function updateSong(Request $request, $id);

    public function destroySong($id);

}
