<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Service\UserServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class UpdateUserController extends Controller
{
    /**
     * @var UserServiceInterface
     */
    private $userService;

    /**
     * UpdateUserController constructor.
     * @param UserServiceInterface $userService
     */
    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    protected function updateInfo(Request $request)
    {
        if (!$user = $this->userService->update($request, $request->id)) {
            return response()->json([
                'errors' => 'Some error is occurred'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        };

        return response()->json([
            'data' => $user,
            'message' => 'Update success'
        ], Response::HTTP_OK);
    }
}
