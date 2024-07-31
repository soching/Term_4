<?php

namespace App\Http\Controllers;
use Exception;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = post::all();
        return response()->json(['data' => $posts, 'message' => 'Requested data'], 200);
    }

    /**;
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $title=$request->title;
        $description=$request->description;

        $post = new post();
        $post->title = $title;
        $post->description = $description;
        
        try{
            $post->save();
            return response()->json(["data"=>$post,"message"=>"Request has been succesfully"],200);
        }catch(Exception $error){
            return response()->json(["data"=>$post,"message"=>"Request has been error","error"=>$error],500);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

