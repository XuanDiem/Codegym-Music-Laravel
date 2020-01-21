<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Music;
use App\Service\impl\MusicService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class MusicController extends Controller
{
    public $musicService;

    public function __construct(MusicService $musicService)
    {
        $this->musicService = $musicService;
    }

    public function getSongsUserHasLiked()
    {
        $songs = $this->musicService->getSongsUserHasLiked(auth('api')->user());
        return response()->json([
            'data' => $songs], 200);
    }

    public function getMusics()
    {
        $music = $this->musicService->getMusics();
        return response()->json([
            'data' => $music], 200);
    }

    public function getUserSongs(Request $request)
    {
        $songs = $this->musicService->getUserSongs($request);
        return response()->json([
            'data' => $songs], 200);
    }

    public function getNewSongs()
    {
//        $songs = $this->musicService->getNewSongs();
        $songs = Music::orderBy('created_at', 'desc')->get();
        return response()->json([
            'data' => $songs], 200);

    }

    public function getVnSongs()
    {
        $songs = $this->musicService->getVnSongs();
        return response()->json([
            'data' => $songs], 200);

    }

    public function getUsSongs()
    {
        $songs = $this->musicService->getUsSongs();
        return response()->json([
            'data' => $songs], 200);

    }

    public function getSong($songId)
    {
        $music = $this->musicService->getSong($songId);
        return response()->json([
            'data' => $music], 200);
    }

    public function create(Request $request)
    {
        $this->musicService->create($request);
        return response()->json(['message' => 'You Created A Song Success !']);
    }

    public function update(Request $request, $id)
    {
        $song = $this->musicService->update($request, $id);
        return response()->json([
            'data' => $song,
            'message' => 'Song has been edit Success !']);
    }

    public function delete($id)
    {
        $this->musicService->delete($id);
        return response()->json(['message' => 'You Deleted A Song Success !']);
    }

    public function likeSong($userId, $songId)
    {
        $data = $this->musicService->likeSong($userId, $songId);
        return response()->json([
            'data' => $data,
            'message' => 'Like A Song'
        ], Response::HTTP_OK);
    }

    public function disLikeSong($userId, $songId)
    {
        $data = $this->musicService->disLikeSong($userId, $songId);
        return response()->json([
            'data' => $data,
            'message' => 'Dis Like A Song'
        ], Response::HTTP_OK);
    }
}
