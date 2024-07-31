<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function(){
    global $users;
    return $users;
});

Route::get('/user', function(){
    global $users;
    $users_name="";
    foreach ($users as $user){
        $users_name.= $user['name']." ,";
    }
    return 'There are Mr. '.$users_name;
});

