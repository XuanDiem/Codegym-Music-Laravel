<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubRouteController extends Controller
{
    public function testUser()
    {
        return response()->json(200);
    }
}
