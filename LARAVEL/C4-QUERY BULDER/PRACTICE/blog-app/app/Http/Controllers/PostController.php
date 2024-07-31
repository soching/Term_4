<?php

namespace App\Http\Controllers;
use App\Models\post;
use Exception;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = post::all();
        return response()->json(['data'=>$posts, 'message'=>'you are getting datas'], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->name;
        $title = $request->title;
        $posts = new post();

        $posts->name = $name;
        $posts->title = $title;
       
        try{ 
            $posts->save();
            return response()->json(['data'=>$posts, 'message'=>"you can create a new resource"], 200);
        }catch(Exception $error){
            return response()->json(['data'=>$posts, 'message'=>'you can not create a new resource','error'=>$error], 400);

        };

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
        $name = $request->name;
        $title = $request->title;

        $posts = post::where('id', $id)->first();
        $posts->name = $name;
        $posts->title = $title;
        try{ 
            $posts->save();
            return response()->json(['data'=>$posts, 'message'=>"you can create a new resource"], 200);
        }catch(Exception $error){
            return response()->json(['data'=>$posts, 'message'=>'you can not create a new resource','error'=>$error], 400);

        };


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
 
}
}