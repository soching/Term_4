<?php
use App\Models\fruit;
use App\Http\Controllers\FruitController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/fruit',function(){
    $data= fruit::all();
    return response()->json(['data'=>$data,'message'=>'you getting data'],200);
});


Route::POST('/fruit', function(){
    return fruit::create([
        'name' =>request('name'),
        'location'=>request('location'),
        
    ]);
});


Route::put('/fruit/{fruit}', function(fruit $fruit){
    $succes = $fruit->update([
        'name'=>request('name'),
        'location'=>request('location'),
    ]);
    return $succes;
});

Route::delete('/fruit/{fruit}', function(fruit $fruit){
    $succes =$fruit->delete();
    return $succes;
});





// sanctum
Route::get('create-user', function(Request $request){
    Route::get('login', function(Request $request){

    });
});


Route::middleware('auth:sanctum')->get('logout', function(Request $request){
    
});

