<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Http\Resources\PostResource;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        return PostResource::collection(Post::all()) ;

    }
    //create 
    public function store(Post $post){
        return Post::create([
            "title"=>request("title"),
            "description"=>request("description")
            ]);

    }
    //update
    public function update(Post $post){
        $success = $post->update(
            [
                'title'=>request('title'),
                'description'=>request('description'),
            ]
            );
            return [
                "success" => $success,
            ];

    }
    //delete
    public function destroy(Post $post){
        $success = $post->delete();
        return [
            "success" => $success,
        ];
    }
}
