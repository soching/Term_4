<?php

namespace App\Http\Controllers;
use Exception;
use App\Models\post;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return PostResource::collection($posts);
    }
    // 'data'=>post::all(),"message"=>"---","satus"=>200

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $title=$request->title;
        $body =$request->body;

        $post = new post();
        $post->title =$title;
        $post->body = $body;
        $post->user_id = $request->user_id;

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
    public function show(post $post)
    {
        //
        // $id = $post->id;
        return $post;
        
        // $post = post::find($id);


        
    }

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, Post $post)
{
    // Validate the request data
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'body' => 'required|string',
    ]);

    // Update the post
    $post->title = $validatedData['title'];
    $post->body = $validatedData['body'];
    $post->save();

    // Return a JSON response
    return response()->json([
        'data' => $post,
        'message' => 'Post updated successfully',
    ], 200);
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        //
        $post->delete();

        try{
            return response()->json(["message"=>"Delete was successfully"]);
        }catch(Exception $error){
            return response()->json(["message"=>"Cannot delete","error"=>$error],500);
        }
    }
}
