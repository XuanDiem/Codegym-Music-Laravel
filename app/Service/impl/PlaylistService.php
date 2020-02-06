<?php


namespace App\Service\impl;

use App\Playlist;
use App\Repository\PlaylistRepositoryInterface;
use App\Service\PlaylistServiceInterface;
use App\Service\UserServiceInterface;

class PlaylistService implements PlaylistServiceInterface
{
    /**
     * @var PlaylistRepositoryInterface
     */
    private $playlistRepository;
    /**
     * @var UserServiceInterface
     */
    private $userService;

    /**
     * PlaylistService constructor.
     * @param PlaylistRepositoryInterface $playlistRepository
     * @param UserServiceInterface $userService
     */
    public function __construct(PlaylistRepositoryInterface $playlistRepository,
                                UserServiceInterface $userService
    )
    {
        $this->playlistRepository = $playlistRepository;
        $this->userService = $userService;
    }

    public function create($request)
    {
        $playlist = new Playlist();
        $playlist->namePlaylist = $request->namePlaylist;
        $playlist->user_id = $request->user_id;
        $playlist->save();
        return $playlist;
    }

    public function getUserPlaylist($userId)
    {
        $user = $this->userService->getUser($userId);
        return $user->playlists;
    }

    public function putSongToPlaylist($playlistId, $songId)
    {
        return $this->playlistRepository->putSongToPlaylist($playlistId, $songId);
    }

    public function removeSongFromPlaylist($playlistId, $songId)
    {
        return $this->playlistRepository->removeSongFromPlaylist($playlistId, $songId);
    }

    public function getSongsInPlaylist($playlistId)
    {
        $playlist = $this->playlistRepository->getPlaylist($playlistId);
        return $playlist->musics;
    }

    public function update($request, $playlistId)
    {
        $playlist = $this->playlistRepository->getPlaylist($playlistId);
        $playlist->namePlaylist = $request->newNamePlaylist ? $request->newNamePlaylist : $playlist->namePlaylist;
        $this->playlistRepository->update($playlist);
        return $playlist;
    }

    public
    function getPlaylistsUserHasLiked($user)
    {
        return $user->playlistsHasLiked->map(function ($playlist) {
            return $playlist->id;
        });
    }

    public function likePlaylist($playlistId)
    {
        return $this->playlistRepository->likePlaylist($playlistId);
    }

    public function disLikePlaylist($playlistId)
    {
        $data = $this->playlistRepository->findSongInPivotTable(auth('api')->user()->id, $playlistId);
        $this->playlistRepository->disLikePlaylist($data);
        return $data;
    }

}
