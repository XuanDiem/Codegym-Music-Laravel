<?php


namespace App\Service;


interface UserServiceInterface
{
    public function update($request, $id);

    public function getUser($id);

    public function show_profile();
}
