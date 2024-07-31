<?php

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
//mission2 get array of users
// Route::get('/users',function(){
//    global $users;
//    return $users;
// });
//mission3 get vlues for id on url
// Route::get('/users/{id}',function($id){
//     global $users;
//     return $users[$id];
// });

//mission4 get values from specific name on url ex: if you input name Rady it will show you only values of Rady
// Route::get('/user/name/{name}', function($name){
//     global $users;
//     $users_name=$users[0];
//     foreach ($users as $user){
//         if($user['name']==$name){
//             $users_name=$user;
//         }
//     }
//     return $users_name;
// });

//mission5 if you input url nont follow you route it will show you the messages for errors
Route::prefix('users')->group(function () {
    Route::get('/users', function () {
        global $users;
        return $users;
    });

    Route::get('/users/{id}', function ($id) {
        global $users;
        return $users[$id];
    });

    Route::get('/user/name/{name}', function ($name) {
        global $users;
        $users_name = $users[0];
        foreach ($users as $user) {
            if ($user['name'] == $name) {
                $users_name = $user;
            }
        }
        return $users_name;
    });

    Route::fallback(function () {
        return 'You can not get users like this!.';
    });
});


//mision6
Route::prefix('users')->group(function () {
    Route::get('/users', function () {
        global $users;
        return $users;
    });

    Route::get('/users/{id}', function ($id) {
        global $users;
        return $users[$id];
    });

    Route::get('/user/posts/{posts}', function ($posts) {
        global $users;
        $users_name = $users[0];
        foreach ($users as $user) {
            if ($user['posts'] == $posts) {
                $users_name = $user;
            }
        }
        return 'How are you?';
    });

    Route::fallback(function () {
        return 'You can not get users like this!.';
    });
});



