<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Syntax Action. 
use App\Http\Controllers\UserinfosController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// String syntax
Route::post('add', 'App\Http\Controllers\UserinfosController@adding');

Route::put('edit', 'App\Http\Controllers\UserinfosController@editing');

Route::delete('delete', 'App\Http\Controllers\UserinfosController@delete');

Route::get('get', 'App\Http\Controllers\UserinfosController@getting');
