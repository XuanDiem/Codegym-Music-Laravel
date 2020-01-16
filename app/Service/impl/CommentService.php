<?php


namespace App\Service\impl;


use App\Comment;
use App\Music;
use App\Repository\CommentRepositoryInterface;
use App\Service\CommentServiceInterface;
use Illuminate\Support\Facades\Auth;


class CommentService implements CommentServiceInterface
{
    protected $commentRepository;
    public function __construct(CommentRepositoryInterface $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }
    public function getAll()
    {
        return $this->commentRepository->getAll();
    }
    public function destroy($id)
    {
        return $this->commentRepository->destroy($id);
    }
    public function store($request)
    {
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->user_id = $request->user_id;
//        Auth::guard('api')->user()->id;
        $comment->music_id = $request->music_id;
//        $comment->music_id = Music::findOrFail($request->music_id);
        return $this->commentRepository->store($comment);
    }
    public function edit($id)
    {
        return $this->commentRepository->edit($id);
    }
    public function update($request, $id)
    {
        $comment = Comment::findOrFail($id);
        $comment->content = $request->input('content');
        return $this->commentRepository->store($comment);
    }

}
