<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

<<<<<<< HEAD
Route::get('/test-user', 'SubRouteController@testAdmin');

Route::get('songs', 'MusicController@getAll');
Route::post('song/create', 'MusicController@createSong');
Route::put('song/edit/{id}', 'MusicController@updateSong');
Route::delete('song/delete/{id}', 'MusicController@destroySong');
=======
Route::get('/test-user', 'SubRouteController@testUser');
>>>>>>> a40a5dda839b42c3141bd0ee0b32b0ccd6c9698a
