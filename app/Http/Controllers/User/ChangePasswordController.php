<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class ChangePasswordController extends Controller
{
    protected function changePassword(Request $request)
    {
        $user = auth('api')->user();
        $user->password = Hash::make($request->newPassword);
        $user->save();

        return response()->json([
            'user' => $user,
            'message' => 'Password was changed'
        ], Response::HTTP_OK);
    }
}
