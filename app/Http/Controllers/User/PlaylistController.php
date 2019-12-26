<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Service\PlaylistServiceInterface;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PlaylistController extends Controller
{
    /**
     * @var PlaylistServiceInterface
     */
    private $playlistService;

    /**
     * PlaylistController constructor.
     * @param PlaylistServiceInterface $playlistService
     */
    public function __construct(PlaylistServiceInterface $playlistService)
    {
        $this->playlistService = $playlistService;
    }

    public function create(Request $request)
    {
        $playlist = $this->playlistService->create($request);
        return response()->json([
            'data' => $playlist,
            'message' => 'Create playlist success'
        ], Response::HTTP_OK);
    }

    public function getUserPlaylists($id)
    {
        if (!$playlists = $this->playlistService->getUserPlaylist($id)) {
            return \response()->json([
                'message' => [
                    'errors' => 'Error! Maybe id not exist'
                ]
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return \response()->json([
            'data' => $playlists,
            'message' => 'Get play list success'
        ], Response::HTTP_OK);
    }

    public function putSongToPlaylist(Request $request)
    {
        if (!$playlists = $this->playlistService->putSongToPlaylist($request->playlistId, $request->songId)) {
            return \response()->json([
                'message' => [
                    'errors' => 'Error! Maybe id not exist'
                ]
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return \response()->json([
            'data' => $playlists,
            'message' => 'Put song to Playlist'
        ], Response::HTTP_OK);
    }

    public function getSongInPlaylist($playlistId)
    {
        if (!$songs = $this->playlistService->getSongsInPlaylist($playlistId)) {
            return \response()->json([
                'message' => [
                    'errors' => 'Error! Maybe id not exist'
                ]
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        return \response()->json([
            'data' => $songs,
            'message' => 'Get songs success'
        ], Response::HTTP_OK);

    }
    //
}
