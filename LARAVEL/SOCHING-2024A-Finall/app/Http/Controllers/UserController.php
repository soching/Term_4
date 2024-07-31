<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        $users = UserResource::collection($users);
        return response()->json(['data' => $users, 'message'=>'you can get users'], status:200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $email_verified_at = $request->email_verified_at;
        $password = $request->password;
  
         $users = new User();
         $users->name =$name;
         $users->email =$email;
         $users->email_verified_at =$email_verified_at;
         $users->password =$password;
         try {
            $users->save();
             return response()->json(['data' =>$users, 'message' => 'you create data'],status:200);
 
         }catch(Exception $error) {
             return response()->json(['data' =>$users, 'message'=>'you cannot create data','error'=>$error],status:400);
         }
         
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $name = $request->name;
        $email = $request->email;
        $email_verified_at = $request->email_verified_at;
        $password = $request->password;
    
        $users = User::where('id', $id)->first();
    
        $users->name =$name;
        $users->email =$email;
        $users->email_verified_at =$email_verified_at;
        $users->password =$password;
        try {
           $users->save();
            return response()->json(['data' =>$users, 'message' => 'you create data'],status:200);

        }catch(Exception $error) {
            return response()->json(['data' =>$users, 'message'=>'you cannot create data','error'=>$error],status:400);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = User::find($id);
        $users->delete();
         return response()->json(['data' => $users, 'message' => 'you deleted data'],status:200);
    }
}
