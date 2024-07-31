<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::resource('users', UserController::class);

Route::resource('posts', PostController::class);

Route::resource('comments', CommentController::class);

Route::resource('likes', LikeController::class);

Route::get('/users_posts_comments', [UserController::class, 'getUserPostComments']);

Route::get('/users_posts_comments_likes', [UserController::class, 'getUserPostCommentLikes']);

Route::get('/users_posts_comments_likes/{user_id}', [UserController::class, 'getUserPostCommentLikesBy']);

Route::get('/count_posts_comments', [UserController::class, 'countPostComments']);