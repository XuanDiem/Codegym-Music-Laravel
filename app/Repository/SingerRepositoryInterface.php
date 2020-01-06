<?php


namespace App\Repository;


interface SingerRepositoryInterface
{
    public function getSingers();

    public function create($singer);

//    public function finById($id);
//
//    public function update($music);
//
//    public function delete($idMusic);
}
