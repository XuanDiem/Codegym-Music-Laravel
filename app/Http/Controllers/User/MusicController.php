<?php /** @noinspection ALL */

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Music;
use App\Service\impl\MusicService;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public $musicService;

    public function __construct(MusicService $musicService)
    {
        $this->musicService = $musicService;
    }

    public function getMusics()
    {
        $music = $this->musicService->getMusics();
        return response()->json([
            'data'=> $music], 200);
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
        $this->musicService->update($request, $id);
        return response()->json(['message' => 'You Edited A Song Success !']);

    }

    public function delete($id)
    {
        $this->musicService->delete($id);
        return response()->json(['message' => 'You Deleted A Song Success !']);
    }

}
