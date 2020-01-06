<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Service\impl\SingerService;
use App\Service\SingerServiceInterface;
use Illuminate\Http\Request;

class SingerController extends Controller
{
    /**
     * @var SingerServiceInterface
     */
    private $singerService;

    public function __construct(SingerService $singerService)
    {

        $this->singerService = $singerService;
    }

    public function getSingers()
    {
        $singers = $this->singerService->getSingers();
        return response()->json([
            'data'=> $singers], 200);
    }


    public function create(Request $request)
    {
        $this->singerService->create($request);
        return response()->json(['message' => 'You Created A Singer Success !']);

    }
//
//    public function update(Request $request, $id)
//    {
//        $this->musicService->update($request, $id);
//        return response()->json(['message' => 'You Edited A Song Success !']);
//
//    }
//
//    public function delete($id)
//    {
//        $this->musicService->delete($id);
//        return response()->json(['message' => 'You Deleted A Song Success !']);
//    }

}
