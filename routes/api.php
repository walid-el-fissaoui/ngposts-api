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
Route::get('/v1/posts',[\App\Http\Controllers\PostsController::class,'index'])->name('posts');
Route::post('/v1/posts',[\App\Http\Controllers\PostsController::class,'store'])->name('posts.store');
Route::put('/v1/posts/{id}',[\App\Http\Controllers\PostsController::class,'update'])->name('posts.update');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
