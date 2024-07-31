<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;


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


// books
Route::get('book/list',[BookController::class, 'index']);
Route::post('book/create',[BookController::class, 'store']);
Route::put('book/update/{id}',[BookController::class, 'update']);
Route::delete('book/delete/{id}',[BookController::class, 'destroy']);


//users
Route::get('user/list',[UserController::class, 'index']);
Route::post('user/create',[UserController::class, 'store']);
Route::put('user/update/{id}',[UserController::class, 'update']);
Route::delete('user/delete/{id}',[UserController::class, 'destroy']);
