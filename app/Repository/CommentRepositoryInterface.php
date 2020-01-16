<?php


namespace App\Repository;


interface CommentRepositoryInterface
{
    public function getAll();
    public function store($request);
    public function destroy($id);
    public function edit($id);
    public function update($request,$id);
}
