<?php


namespace App\Repository\impl;


use App\Repository\UserRepositoryInterface;
use App\User;

class UserRepository implements UserRepositoryInterface
{

    public function update($user)
    {
        return $user->save();
    }

    public function findById($id)
    {
        return User::findOrFail($id);
    }
}
