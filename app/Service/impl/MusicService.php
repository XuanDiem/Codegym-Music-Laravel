<?php


namespace App\Service\impl;

use App\Music;
use App\Repository\impl\MusicRepository;
use App\Service\SingerServiceInterface;
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
    /**
     * @var SingerServiceInterface
     */
    private $singerService;

    public function __construct(UserServiceInterface $userService,
                                SingerServiceInterface $singerService,
                                MusicRepository $musicRepository)
    {
        $this->musicRepository = $musicRepository;
        $this->userService = $userService;
        $this->singerService = $singerService;
    }

    public function getUserSongs($request)
    {
        $singer = Auth::guard('api')->user()->singer;
        return $singer;
    }

    public function getVnSongs()
    {
        return $this->musicRepository->getVnSongs();
    }

    public function getUsSongs()
    {
        return $this->musicRepository->getUsSongs();
    }

    public function getSingerSongs($singerId)
    {
        $singer = $this->singerService->getSinger($singerId);
        return $singer->songs;
    }

    public function getMusics()
    {
        return $this->musicRepository->getMusics();
    }

    public function getSong($id)
    {
        return $this->musicRepository->finById($id);
    }

    public function getTopViewsSong()
    {
        return $this->musicRepository->getTopViewsSong();
    }

    public function getFavoriteSongs()
    {
        $songs = [];
        $likesCountSongIds = $this->musicRepository->getFavoriteSongs();
        foreach ($likesCountSongIds as $countSongId) {
            array_push($songs, $this->getSong($countSongId->music_id));
        }
        return $songs;
    }

    public function create(Request $request)
    {
        $music = new Music();
        if ($this->isUserUpload($request)) $music->user_id = $request->userId;
        $music->name = $request->name;
        $music->description = $request->description;
        $music->avatar = $request->avatar;
        $music->file = $request->file;
        $music->category = $request->category;
        $this->musicRepository->create($music);
        $this->createSingers($music, $request->singers);
    }

    public function createSingers($music, $singers)
    {
        foreach ($singers as $value) {
            $this->musicRepository->createSingers($music, $value);
        }
    }

    public function updateSingers($music, $request)
    {
        foreach ($request->singers as $value) {
            $this->musicRepository->updateSingers($music, $value);
        }
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
        $music->description = $request->description ? $request->description : $music->description;
        $music->avatar = $request->newImage ? $request->newImage : $music->avatar;
        if ($this->doUserUpdateSingers($request)) {
            $this->deleteOldSingers($id);
            $this->createSingers($music, $request->newSingers);
        }
        $this->musicRepository->update($music);
        return $this->musicRepository->finById($id);
    }

    public function doUserUpdateSingers($request)
    {
        if ($request->newSingers) return true;
        return false;
    }

    public function deleteOldSingers($id)
    {
        $this->musicRepository->deleteOldSingers($id);
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
        return $this->musicRepository->likeSong($userId, $songId);
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
