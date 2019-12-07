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

    public function getAll()
    {
        return $this->musicService->getAll();
    }

    public function createSong(Request $request)
    {
        $this->musicService->createSong($request);
        return response()->json(['message' => 'You Created Success !']);
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
