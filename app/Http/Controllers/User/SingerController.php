<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Service\impl\SingerService;
use App\Service\impl\UserService;
use App\Service\SingerServiceInterface;
use Illuminate\Http\Request;

class SingerController extends Controller
{
    /**
     * @var SingerServiceInterface
     */
    private $singerService;
    /**
     * @var UserService
     */
    private $userService;

    public function __construct(SingerService $singerService, UserService $userService)
    {
        $this->singerService = $singerService;
        $this->userService = $userService;
    }

    public function getSingers()
    {
        $singers = $this->singerService->getSingers();
        return response()->json([
            'data' => $singers], 200);
    }

    public function getSingerOfUser()
    {
        $singer = $this->userService->getSingerOfUser();
        return response()->json([
            'data' => $singer], 200);
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
