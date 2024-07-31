<?php

namespace App\Models;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// use Illuminate\Database\Eloquent\Relations\HasMany;
// use App\Http\Controllers\ProductController;

class product extends Model
{
    //  public function comments(): HasMany
    // {
    //     return $this->hasMany(ProductController::class);
    // }
    use HasFactory;
    protected $fillable =[
        'name',
        'description'
    ];
    // improve code 
    public function createProduct($name, $description){
        $product = new product();
        $product->name = $name;
        $product->description = $description;
        try{
            $product->save();
        }catch(Exception $error){
            return $error;
        };
    }
    public function updateProduct($id, $name, $description){
        $product = product::find($id);
        $product->name = $name;
        $product->description = $description;
        try{
            $product->save();
        }catch(Exception $error){
            return $error;
        };
    }
    // public function deleteProduct($id, $name, $description){
    //     $product = product::find($id);
    //     try{
    //         $product->delete();
    //     }catch(Exception $error){
    //         return $error;
    //     };
    // }
}
