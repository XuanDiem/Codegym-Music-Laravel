<?php


namespace App\Repository\impl;


use App\Repository\UserRepositoryInterface;
use App\User;
use Illuminate\Support\Facades\Auth;

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

    public function show_profile()
    {
        return Auth::guard('api')->user();
        //        Auth::guard('api')->user()->id;
    }
}
