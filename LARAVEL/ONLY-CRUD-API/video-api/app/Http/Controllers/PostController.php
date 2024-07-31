<?php

namespace App\Http\Controllers;
use Exception;
use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = post::all();
        return response()->json(['data' => $posts, 'message'=>'you are getting data'], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->name;
        $location = $request->location;
        $posts = new post();

        $posts->name = $name;
        $posts->location = $location;
        try{
            $posts->save();
            return response()->json(['data' => $posts,'message'=>'you are creating data'], 200);
        }catch(Exception $error){
            return response()->json(['data' => $posts,'message'=>'you are not creating data','error'=>$error], 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = $request->id;
        $name = $request->name;
        $location = $request->location;

        $posts = post::where('id', $id)->first();

        $posts->name = $name;
        $posts->location = $location;
        try{
            $posts->save();
            return response()->json(['data' => $posts,'message'=>'you are updating data'], 200);
        }catch(Exception $error){
            return response()->json(['data' => $posts,'message'=>'you are not updating data','error'=>$error], 400);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        $post->delete();
        return response()->json(['data' => $post,'message'=>'you are deleting data'], 200);
    }
}

