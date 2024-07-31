<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Resources\ShowCountPostCommentResource;
use App\Http\Resources\ShowUserPostCommentLikeResource;
use App\Http\Resources\ShowUserPostCommentResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return response()->json(['success'=> true, 'message'=> 'Get all users.', 'data'=> $users], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $userRequest = $request->only('name', 'email', 'password');
        $user = User::create($userRequest);
        return response()->json(['success'=> true, 'message'=> 'Create user is successfully.', 'data'=> $user], 200);
    }

    /**
     * Get for each users their posts and their comments.
     */
    public function getUserPostComments()
    {
        $users = User::all();
        $users = ShowUserPostCommentResource::collection($users);
        return response()->json(['success'=> true, 'message'=> 'Get for each users their posts and their comments.', 'data'=> $users], 200);
    }

    /**
     * Get for each users their posts and their comments and likes.
     */
    public function getUserPostCommentLikes()
    {
        $users = User::all();
        $users = ShowUserPostCommentLikeResource::collection($users);
        return response()->json(['success'=> true, 'message'=> 'Get for each users their posts and their comments and likes.', 'data'=> $users], 200);
    }

    /**
     * Get single user with their posts and their comments and likes.
     */
    public function getUserPostCommentLikesBy($user_id)
    {
        $user = User::find($user_id);
        if ($user) {
            $user = new ShowUserPostCommentLikeResource($user);
            return response()->json(['success'=> true, 'message'=> 'Get single user with their posts and their comments and likes.', 'data'=> $user], 200);
        }
        return response()->json(['success'=> false, 'message'=> 'User id is not found.'], 404);
    }

    /**
     * Count posts and comments of each users.
     */
    public function countPostComments()
    {
        $users = User::all();
        $users = ShowCountPostCommentResource::collection($users);
        return response()->json(['success'=> true, 'message'=> 'Count posts and comments of each users.', 'data'=> $users], 200);
    }
}
