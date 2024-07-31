<?php

namespace App\Http\Controllers;

use App\Http\Resources\CommentResource;
use Illuminate\Http\Request;
use App\Models\comment;
use Exception;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = comment::all();
        
        $post = CommentResource::collection($post);

        return response()->json(['data' => $post, 'message'=>'you can get data'], status:200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $description = $request->description;
        $posts = new comment();
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
        //
        }
        
        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, string $id)
        {
        $id = $request->id;
        $user_id = $request->user_id;
        $description = $request->description;
    
        $comments = comment::where('id', $id)->first();
    
        $comments->description = $description;
        $comments->user_id = $user_id;
        try {
            $comments->save();
            return response()->json(['data' => $comments, 'message' => 'you updated data'],status:200);
    
        }catch(Exception $error) {
            return response()->json(['data' => $comments, 'message'=>'you cannot update data','error'=>$error],status:400);
        }
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $$comment = comment::find($id);
        $$comment->delete();
        return response()->json(['data' => $$comment, 'message' => 'you deleted data'],status:200);
    }
}
