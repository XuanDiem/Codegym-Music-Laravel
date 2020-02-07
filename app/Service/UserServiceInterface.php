<?php


namespace App\Service;


interface UserServiceInterface
{
    public function update($request, $id);

    public function getSingerOfUser();

    public function getUser($id);

    public function show_profile();

    public function changePassword($request);
}
