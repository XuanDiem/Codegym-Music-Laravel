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

    public function __construct(CommentServiceInterface $commertService, UserServiceInterface $userService, MusicServiceInterface $musicService)
    {
        $this->commentService = $commertService;
        $this->userService= $userService;
        $this->musicService = $musicService;
//        $this->middleware('auth');
    }
    public function index()
    {
        $comments= $this->commentService->getAll();
        $user= $this->userService->show_profile();
        $musics= $this->musicService->getMusics();
        return response()->json([
            'user'=>$user,
            'comment'=> $comments,
            'music'=>$musics], 200);
    }

    public function create(Request $request)
    {
        $this->commentService->store($request);
        return response()->json(['message' => 'You Created A comment Success!']);
    }
    //    public function create()
//    {
//        $user= $this->userService->show_profile();
//        return view('feedback.createFeedback',compact('user'));
//    }
//    public function show($id)
//    {
//        //
//    }
//    public function edit($id)
//    {
//        $feedback= $this->commentService->edit($id);
//        return view('feedback.editFeedback',compact('feedback'));
//    }
//    public function update(Request $request, $id)
//    {
//        $feedbacks= $this->commentService->update($request,$id);
//        return redirect()->route('feedbacks.index');
//    }
//    public function destroy($id)
//    {
//        $feedbacks= $this->commentService->destroy($id);
//        return redirect()->route('feedbacks.index');
//    }
}
