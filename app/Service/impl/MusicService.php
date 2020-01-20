<?php


namespace App\Service\impl;

use App\Music;
use App\Repository\impl\MusicRepository;
use App\Service\UserServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MusicService implements MusicServiceInterface
{

    public $musicRepository;
    /**
     * @var UserServiceInterface
     */
    private $userService;

    public function __construct(UserServiceInterface $userService
        , MusicRepository $musicRepository)
    {
        $this->musicRepository = $musicRepository;
        $this->userService = $userService;
    }

    public function getUserSongs($request)
    {
        $user = Auth::guard('api')->user();
        return $user->songs;
    }

    public function getVnSongs()
    {
        return $this->musicRepository->getVnSongs();
    }

    public function getUsSongs()
    {
        return $this->musicRepository->getUsSongs();
    }

    public function getMusics()
    {
        return $this->musicRepository->getMusics();
    }

    public function getSong($id)
    {
        return $this->musicRepository->finById($id);
    }

    public function create(Request $request)
    {
        $music = new Music();
        if ($this->isUserUpload($request)) $music->user_id = $request->userId;
        $music->name = $request->name;
        $music->singer = $request->singer;
        $music->description = $request->description;
        $music->avatar = $request->avatar;
        $music->file = $request->file;
        return $this->musicRepository->create($music);
    }

    public function isUserUpload($request)
    {
        return !!$request->userId;
    }

    public
    function update(Request $request, $id)
    {
        $music = $this->musicRepository->finById($id);
        $music->name = $request->newName ? $request->newName : $music->name;
        $music->singer = $request->newSinger ? $request->newSinger : $music->singer;
        $music->description = $request->description ? $request->description : $music->description;
        $music->avatar = $request->newImage ? $request->newImage : $music->avatar;
        $this->musicRepository->update($music);
        return $music;
    }

    public
    function delete($id)
    {
        $idMusic = $this->musicRepository->finById($id);
        return $this->musicRepository->delete($idMusic);
    }

    public
    function likeSong($userId, $songId)
    {
        $data = $this->musicRepository->likeSong($userId, $songId);
        return $data;
    }

    public
    function disLikeSong($userId, $songId)
    {
        $data = $this->musicRepository->findSongInPivotTable($userId, $songId);
        $this->musicRepository->disLikeSong($data);
        return $data;
    }

    public
    function increaseViews($songId)
    {
        $song = $this->musicRepository->finById($songId);
        $song->views += 1;
        $song->save();
        return $song;
    }

    public
    function getSongsUserHasLiked($user)
    {
        return $user->songsHasLike->map(function ($song) {
            return $song->id;
        });
    }

    public
    function getNewSongs()
    {
        return $this->musicRepository->getNewSongs();
    }

}
