<?php
use App\Models\Post;
use App\Http\Controllers\PostController;
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


Route::get('/posts',[PostController::class, 'index'] );
//create data
Route::post('/post',[PostController::class, 'store']);

//update data
Route::put('/posts/{post}',[PostController::class, 'update']);
//delete data
Route::delete('users/{post}',[PostController::class, 'destroy']);