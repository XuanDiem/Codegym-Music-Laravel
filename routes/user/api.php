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
Route::delete('music/delete/{id}', 'MusicController@delete');
Route::get('/song/{songId}', 'MusicController@getSong');
Route::get('/new-song', 'MusicController@getNewSongs');
Route::get('/song-Vn', 'MusicController@getVnSongs');
Route::get('/song-Us', 'MusicController@getUsSongs');
Route::get('/user/songs', 'MusicController@getUserSongs');

Route::post('/changePassword', 'ChangePasswordController@changePassword');

Route::get('singers', 'SingerController@getSingers');
Route::post('singer/create', 'SingerController@create');
//Route::put('music/edit/{id}', 'MusicController@update');
//Route::delete('music/delete/{id}', 'MusicController@delete');

Route::get('comments/{userId}/{musicId}', 'CommentController@index');
Route::post('comment/create', 'CommentController@create');

Route::post('update', 'UpdateUserController@updateInfo')->name('updateInfo');

Route::post('playlist/create', 'PlaylistController@create')->name('playlistCreate');
Route::get('playlists/{userId}', 'PlaylistController@getUserPlaylists')->name('getPlaylists');
Route::post('playlist/song', 'PlaylistController@putSongToPlaylist')->name('putSongToPlaylist');
Route::post('playlist/song/remove', 'PlaylistController@removeSongFromPlaylist')->name('removeSongFromPlaylist');
Route::get('playlist/songs/{playlistID}', 'PlaylistController@getSongInPlaylist')->name('getSongInPlaylist');
Route::post('playlist/update/{playlistID}', 'PlaylistController@updatePlaylist')->name('updatePlaylist');
