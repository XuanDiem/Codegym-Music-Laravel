<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubRouteController extends Controller
{
    public function testAdmin()
    {
        return response()->json(200);
    }
}
