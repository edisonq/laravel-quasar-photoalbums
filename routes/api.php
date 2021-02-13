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


Route::get('/users', 'App\Http\Controllers\UsersController@index');
Route::get('/users/{id}', 'App\Http\Controllers\UsersController@show');
Route::get('/photos', 'App\Http\Controllers\PhotosController@index');
Route::get('/photos/{id}', 'App\Http\Controllers\PhotosController@show');
Route::get('/albums', 'App\Http\Controllers\AlbumsController@index');
Route::get('/albums/{id}', 'App\Http\Controllers\AlbumsController@show');
