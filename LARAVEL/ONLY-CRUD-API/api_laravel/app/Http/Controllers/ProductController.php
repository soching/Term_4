<?php

namespace App\Http\Controllers;
use Exception;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = product::all();
        return response()->json(['data'=>$product, 'message'=>'you are getting data '], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'name' =>'required|max:225',
            'description' =>'required',
        ]);
        if($validation->fails()){
            return response()->json(['error'=>$validation->errors()], 400);
        }

        $name = $request->name;
        $description = $request->description;
        $product = new product();

        // $product->name = $name;
        // $product->description = $description;
        
        try{
            $product->createProduct($name, $description);
            return response()->json(['data'=>$product, 'message'=>'you are creating data '], 200);
        }catch(Exception $error){
            return response()->json(['data'=>$product, 'error'=>'you are creating data ','error'=>$error], 400);
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
        $name = $request->name;
        $description = $request->description;

        $product = product::where('id',$id)->first();

        // $product->name = $name;
        // $product->description = $description;
        try{
            $product->updateProduct($id, $name, $description);
            return response()->json(['data'=>$product, 'message'=>'you are updating data '], 200);
        }catch(Exception $error){
            return response()->json(['data'=>$product, 'error'=>'you are not updating  data ','error'=>$error], 400);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        $product->delete();
        return response()->json(['data'=>$product,'message'=>'you are deleting data '], 200);
    }
}
