<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use Exception;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Books::all();
        return response()->json(['data' => $books, 'message'=>'you can get books'], status:200);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $title = $request->title;
      $author = $request->author;
      $genre = $request->genre;
      $published_year = $request->published_year;
    //   $user_id = $request->user_id;

       $books = new Books();
       $books->title =$title;
    //    $books->user_id =$user_id;
       $books->author = $author;
       $books->genre = $genre;
       $books->published_year = $published_year;

        try {
           $books->save();
            return response()->json(['data' =>$books, 'message' => 'you create data'],status:200);

        }catch(Exception $error) {
            return response()->json(['data' =>$books, 'message'=>'you cannot create data','error'=>$error],status:400);
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
        $title = $request->title;
        $author = $request->author;
        $genre = $request->genre;
        $published_year = $request->published_year;
    
        $books = books::where('id', $id)->first();
    
        $books->title = $title;
        $books->author = $author;
        $books->genre = $genre;
        $books->published_year = $published_year;
        try {
            $books->save();
            return response()->json(['data' => $books, 'message' => 'you updated data'],status:200);
    
        }catch(Exception $error) {
            return response()->json(['data' => $books, 'message'=>'you cannot update data','error'=>$error],status:400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $books = books::find($id);
       $books->delete();
        return response()->json(['data' => $books, 'message' => 'you deleted data'],status:200);
    }
}
