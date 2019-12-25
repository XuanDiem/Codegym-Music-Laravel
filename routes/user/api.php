<?php

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

Route::get('/test-user', 'SubRouteController@testUser');
Route::get('musics', 'MusicController@getMusics');
Route::post('music/create', 'MusicController@create');
Route::put('music/edit/{id}', 'MusicController@update');
Route::delete('music/delete/{id}', 'MuscicController@delete');

Route::post('update', 'UpdateUserController@updateInfo')->name('updateInfo');
