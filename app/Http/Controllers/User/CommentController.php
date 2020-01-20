<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Service\CommentServiceInterface;
use App\Service\impl\MusicServiceInterface;
use App\Service\UserServiceInterface;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    protected $commentService;
    protected $userService;
    /**
     * @var MusicServiceInterface
     */
    private $musicService;

    public function __construct(CommentServiceInterface $commentService, UserServiceInterface $userService, MusicServiceInterface $musicService)
    {
        $this->commentService = $commentService;
        $this->userService = $userService;
        $this->musicService = $musicService;
//        $this->middleware('auth');
    }

    public function index()
    {
        $comments = $this->commentService->getAll();
        return response()->json([
            'comment' => $comments], 200);
    }

    public function getSongsComments($musicId)
    {
        $comments = $this->commentService->getSongComments($musicId);
        return response()->json([
            'data' => $comments], 200);
    }

    public function create(Request $request)
    {
        $this->commentService->store($request);
        return response()->json(['message' => 'Comment Success!']);
    }

}
