<?php /** @noinspection ALL */


namespace App\Service\impl;


use App\Music;
use App\Repository\impl\MusicRepository;
use App\Service\MusicServiceInterface;
use Illuminate\Http\Request;

class MusicService implements MusicServiceInterface
{

    public $musicRepository;

    public function __construct(MusicRepository $musicRepository)
    {
        $this->musicRepository = $musicRepository;
    }

    public function getAll()
    {
        return $this->musicRepository->getAll();
    }

    public function createSong($request)
    {
        $song = new Music();
        $song->name = $request->name;
        $song->description = $request->description;
        $song->file_mp3 = $request->file_mp3;
        $song->avatar = $request->avatar;

        $this->musicRepository->createSong($song);
    }

    public function updateSong(Request $request, $id)
    {
        // TODO: Implement updateSong() method.
    }

    public function destroySong($id)
    {
        // TODO: Implement destroySong() method.
    }
}
