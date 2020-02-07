<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Service\UserServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class ChangePasswordController extends Controller
{
    /**
     * @var UserServiceInterface
     */
    private $userService;

    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    public function changePassword(Request $request)
    {
        if (!$user = $this->userService->changePassword($request)) {
            return response()->json([
                'message' => 'May be Password is incorrect'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        return response()->json([
            'data' => $user,
            'message' => 'Change Password Success, Please Login again'
        ], Response::HTTP_OK);
    }
}
