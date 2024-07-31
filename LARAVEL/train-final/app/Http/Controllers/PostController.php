<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use Exception;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = post::all();
        $post = PostResource::collection($post);

        return response()->json(['data' => $post, 'message'=>'you can get data'], status:200);
    }
    public function count()
    {
        $post = post::all();
        $post = $post->count();
        return response()->json(['All data have ' => $post], status:200);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $title = $request->titel;
        $description = $request->description;
        $posts = new post();

        $posts->titel = $title; 
        $posts->user_id = $request->user_id;
        $posts->description = $description;
        try {
            $posts->save();
            return response()->json(['data' => $posts, 'message' => 'you create data'],status:200);

        }catch(Exception $error) {
            return response()->json(['data' => $posts, 'message'=>'you cannot create data','error'=>$error],status:400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return post::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = $request->id;
        $title = $request->titel;
        $user_id = $request->user_id;
        $description = $request->description;

        $posts = post::where('id', $id)->first();

        $posts->titel = $title;
        $posts->description = $description;
        $posts->user_id = $user_id;
        try {
            $posts->save();
            return response()->json(['data' => $posts, 'message' => 'you updated data'],status:200);

        }catch(Exception $error) {
            return response()->json(['data' => $posts, 'message'=>'you cannot update data','error'=>$error],status:400);
        } 
    }

    /**
     * Remove the specified resource from storage.                                                                                                                   
     */
    public function destroy(string $id)                                                                                     
    {
        $post = post::find($id);
        $post->delete();
        return response()->json(['data' => $post, 'message' => 'you deleted data'],status:200);
    }
}
