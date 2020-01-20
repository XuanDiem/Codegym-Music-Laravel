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
    /**
     * @var MusicService
     */
    private $songService;

    public function __construct(MusicService $songService, CommentRepositoryInterface $commentRepository)
    {
        $this->commentRepository = $commentRepository;
        $this->songService = $songService;
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
        $comment->comment = $request->contentComment;
        $comment->user_id = $request->userId;
        $comment->music_id = $request->songId;
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

    public function getSongComments($songId)
    {
        $song = $this->songService->getSong($songId);
        return $song->comments;
    }
}
