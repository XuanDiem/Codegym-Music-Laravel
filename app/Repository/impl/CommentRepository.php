<?php


namespace App\Repository\impl;


use App\Comment;
use App\Repository\CommentRepositoryInterface;

class CommentRepository implements CommentRepositoryInterface
{
    protected $comment;
    public function __construct(Comment $comment)
    {
        $this->comment =$comment;
    }
    public function getAll()
    {
//        return  $this->feedback->all();
        return Comment::all();
    }
    public function destroy($id)
    {
        $comment= $this->comment->findOrFail($id);
        return $comment->delete();
    }
//    public function findbyid($id)
//    {
//        // TODO: Implement findbyid() method.
//    }
    public function store($comment)
    {
        return $comment->save();
    }
    public function edit($id)
    {
        $comment= $this->comment->findOrFail($id);
        return $comment;
    }
    public function update($request, $id)
    {
        $comment= Comment::findOrFail($id);
        return $comment->update($request->all());
    }
}
