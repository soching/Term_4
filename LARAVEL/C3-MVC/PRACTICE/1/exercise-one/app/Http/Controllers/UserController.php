<?php

namespace App\Htuuest;
use App\Models\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
        $users=User::all();
        return $users;
    }    
}
