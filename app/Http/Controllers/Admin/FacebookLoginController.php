<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use JWTAuth;

class FacebookLoginController extends Controller
{
    public function getDataUserAngular (Request $request){

        if ( $user = User::find($request->id)) {
            auth('api')->login($user);

        }
        else {
            $user = User::create([
                'id' => $request->id,
                'name' => $request->name,
                'email' => $request->email,

            ]);
           auth('api')->login($user);
        }

	$token = JWTAuth::fromUser(auth('api')->user());
        return $this->respondWithToken($token);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60,

        ]);
    }
}
