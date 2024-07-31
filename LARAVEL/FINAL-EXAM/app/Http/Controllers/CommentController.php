<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::all();
        return response()->json(['success'=> true, 'message'=> 'Get all comments.', 'data'=> $comments], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCommentRequest $request)
    {
        $commentRequest = $request->only('text', 'user_id', 'post_id');
        $comment = Comment::create($commentRequest);
        return response()->json(['success'=> true, 'message'=> 'Create comment is successfully.', 'data'=> $comment], 200);
    }
}
