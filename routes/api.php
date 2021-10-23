<?php

use App\Http\Controllers\AdminController;=======
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

/*Route::resource('/user',UserController::class);
Route::resource('/post',PostController::class);*/



Route::post('admin/user-register', AdminController::class);
Route::resource('/user',UserController::class);
Route::resource('/post',PostController::class);
Route::resource('/comment',CommentController::class);
