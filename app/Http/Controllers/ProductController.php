<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ProductController extends Controller
{
   
    public function show(Product $product)
    {
        $galleries = Gallery::where('imageable_id',$product->id)->get();
        return view('products.show',compact('product','galleries'));
    }  
}
