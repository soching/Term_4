<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
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

// Route::resource('post', PostController::class);

Route::get('posts/list', [PostController::class, 'index']);
Route::get('posts/count', [PostController::class, 'count']);
Route::get('posts/show/{id}', [PostController::class, 'show']);
Route::post('posts/create', [PostController::class, 'store']);
Route::put('posts/update/{id}', [PostController::class, 'update']);
Route::delete('posts/delete/{id}', [PostController::class, 'destroy']);


// comment
Route::get('comment/list', [CommentController::class, 'index']);
Route::post('comment/create', [CommentController::class, 'store']);
Route::put('comment/update/{id}', [CommentController::class, 'update']);
Route::delete('comment/delete/{id}', [CommentController::class, 'destroy']);




 

