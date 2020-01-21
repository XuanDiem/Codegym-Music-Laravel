<?php


namespace App\Repository;


interface UserRepositoryInterface
{
    public function update($user);

    public function findById($id);

    public function show_profile();
}
