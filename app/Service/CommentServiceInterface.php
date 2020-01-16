<?php


namespace App\Service;


interface CommentServiceInterface
{
    public function getAll();
    public function destroy($id);
    public function store($request);
    public function edit($id);
    public function update($request,$id);

}
