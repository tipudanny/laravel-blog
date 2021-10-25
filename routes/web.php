<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //dd(Response::alu("hello"));
    return view('welcome');
});


Route::resource('/user',UserController::class);
Route::get('/user/{id}/payment',[UserController::class, 'payment']);
Route::resource('/post',PostController::class);

Route::view('/abc', 'welcome');

//Route::resource('/product',ProductController::class);

/*Route::resource('/user',UserController::class);
Route::resource('/post',PostController::class);
Route::post('admin/user-register', [AdminController::class, 'userRegistration']);*/
/*Route::resource('/user',UserController::class);
Route::resource('/post',PostController::class);
Route::resource('/comment',CommentController::class);*/
