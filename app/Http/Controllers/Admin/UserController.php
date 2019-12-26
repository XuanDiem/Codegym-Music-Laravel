<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Service\UserServiceInterface;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use JWTAuth;

class UserController extends Controller
{

    /**
     * @var UserServiceInterface
     */
    private $userService;

    public function __construct(UserServiceInterface $userService)
    {
        $this->middleware('auth:api', ['except' => ['register', 'login']]);

        $this->userService = $userService;
    }

    public function register(UserRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'data' => $user,
            'message' => 'create success',
        ], 200);
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->emailLogin)->first();
        if (!$user) return response()->json([
            'errors' => ['email' => 'Email does not existed']
        ], 401);
        if (Hash::check($request->passwordLogin, $user->password)) {
            auth('api')->login($user);
        } else {
            return response()->json(['errors' => [
                    'password' => 'Password is incorrect']
                ]
                , 401);
        }
        $token = JWTAuth::fromUser(auth('api')->user());
        return $this->respondWithToken($token);
    }

    public function me()
    {
        return response()->json(auth('api')->user());
    }

    public function logout()
    {
        auth('api')->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    public function refresh()
    {
        return $this->respondWithToken(auth('api')->refresh());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60,

        ]);
    }

//    public function update(Request $request, $id)
//    {
//        $this->userService->update($request, $id);
//        return response()->json(['message' => 'You Created A Song Success !']);
//
//    }

}
