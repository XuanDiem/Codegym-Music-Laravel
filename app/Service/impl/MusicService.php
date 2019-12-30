<?php /** @noinspection ALL */


namespace App\Service\impl;


use App\Music;
use App\Repository\impl\MusicRepository;
use Illuminate\Http\Request;

class MusicService implements MusicServiceInterface
{

    public $musicRepository;

    public function __construct(MusicRepository $musicRepository)
    {
        $this->musicRepository = $musicRepository;
    }

    public function getMusics()
    {
        return $this->musicRepository->getMusics();
    }

    public function create(Request $request)
    {
        $music = new Music();
        $music->id = $request->id;
        $music->name = $request->name;
        $music->singer = $request->singer;
        $music->description = $request->description;
        $music->avatar = $request->avatar;
        $music->musicUrl = $request->musicUrl;
        return $this->musicRepository->create($music);
    }

    public function update(Request $request, $id)
    {
        $music = $this->musicRepository->finById($id);
        $music->id = $request->id;
        $music->name = $request->name;
        $music->singer = $request->singer;
        $music->description = $request->description;
        $music->avatar = $request->avatar;
        $music->musicUrl = $request->musicUrl;
        $this->musicRepository->update($music);
    }

    public function delete($id)
    {
        $idMusic = $this->musicRepository->finById($id);
        return $this->musicRepository->delete($idMusic);
    }

    public function likeSong($userId, $songId)
    {
        $data = $this->musicRepository->likeSong($userId, $songId);
        return $data;
    }

    public function disLikeSong($userId, $songId)
    {
        $data = $this->musicRepository->findSongInPivotTable($userId, $songId);
        $this->musicRepository->disLikeSong($data);
        return $data;
    }
}
