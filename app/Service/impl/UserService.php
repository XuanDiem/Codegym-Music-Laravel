<?php


namespace App\Service\impl;


use App\Repository\UserRepositoryInterface;
use App\Service\UserServiceInterface;
use Illuminate\Support\Facades\Hash;

class UserService implements UserServiceInterface
{
    /**
     * @var UserRepositoryInterface
     */
    private $userRepository;

    /**
     * UserService constructor.
     * @param UserRepositoryInterface $userRepository
     */
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function update($request, $id)
    {
        $user = $this->userRepository->findById($id);
        $user->email = $request->newEmail ? $request->newEmail : $user->email;
        $user->name = $request->newName ? $request->newName : $user->name;
        $user->image = $request->newImage ? $request->newImage : $user->image;
        $this->userRepository->update($user);
        return $user;
    }

    public function getUser($id)
    {
        return $this->userRepository->findById($id);
    }

    public function getSingerOfUser()
    {
        return auth('api')->user()->singer;
    }

    public function show_profile()
    {
        return $this->userRepository->show_profile();
    }

    public function changePassword($request)
    {
        $user = auth('api')->user();
        if ($this->checkOldPassword($request, $user)) {
            $user->password = Hash::make($request->newPassword);
            $user->save();
            return $user;
        }
        return $user;
    }

    public function checkOldPassword($request, $user)
    {
        if (Hash::check($request->password, $user->password)) {
            return true;
        }
        return null;

    }
}
