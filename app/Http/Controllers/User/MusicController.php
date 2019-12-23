<?php /** @noinspection ALL */

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Music;
use App\Service\impl\MusicService;
use Illuminate\Http\Request;

class MusicController extends Controller
{
//    public $musicService;
//
//    public function __construct(MusicService $musicService)
//    {
//        $this->musicService = $musicService;
//    }

    public function getMusics()
    {
// return $this->musicService->getMusics();
        $musics = Music::all();
        return $musics;

    }

    public function create(Request $request)
    {
//        $this->musicService->create($request);
//        return response()->json(['message' => 'You Created A Song Success !']);
        $music = new Music();
        $music->id = $request->id;
        $music->name = $request->name;
        $music->singer = $request->singer;
        $music->description = $request->description;
        $music->avatar = $request->avatar;
        $music->musicUrl = $request->musicUrl;
        return $music->save();

    }

    public function update(Request $request, $id)
    {
//        $this->musicService->update($request, $id);
//        return response()->json(['message' => 'You Edited A Song Success !']);
        $music = Music::find($id);
        $music->id = $request->id;
        $music->name = $request->name;
        $music->singer = $request->singer;
        $music->description = $request->description;
        $music->avatar = $request->avatar;
        $music->musicUrl = $request->musicUrl;
        return $music->save();
    }

    public function delete($id)
    {
        $this->musicService->delete($id);
        return response()->json(['message' => 'You Deleted A Song Success !']);
    }

}
