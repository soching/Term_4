<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLikeRequest;
use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $likes = Like::all();
        return response()->json(['success'=> true, 'message'=> 'Get all likes.', 'data'=> $likes], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLikeRequest $request)
    {
        $likeRequest = $request->only('like_number', 'user_id', 'post_id');
        $like = Like::create($likeRequest);
        return response()->json(['success'=> true, 'message'=> 'Create like is successfully.', 'data'=> $like], 200);
    }
}
