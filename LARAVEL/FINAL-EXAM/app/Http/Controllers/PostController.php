<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return response()->json(['success'=> true, 'message'=> 'Get all posts.', 'data'=> $posts], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $postRequest = $request->only('title', 'description', 'user_id');
        $post = Post::create($postRequest);
        return response()->json(['success'=> true, 'message'=> 'Create post is successfully.', 'data'=> $post], 200);
    }
}
