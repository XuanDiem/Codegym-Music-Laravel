<?php


namespace App\Service\impl;

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
        return $this->playlistRepository->create($request);
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
}
