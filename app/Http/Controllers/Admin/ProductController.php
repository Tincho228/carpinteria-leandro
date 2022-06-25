<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
   
    public function index()
    {
        return view('admin.products.index');
    }

    
    public function create()
    {
        $categories = Category::pluck('name','id');
        return view('admin.products.create', compact('categories'));
    }

    
    public function store(ProductRequest $request)
    {
        //Storage product in database
        $product = Product::create($request->all());
        //Obtaining route
        $nombre = $request->file->getClientOriginalName();
        $code = generateBarcodeNumber();
        $url = 'photos/'. $code . $nombre;
        $ruta = storage_path() . '\app\public\photos/'. $code . $nombre;
        if($request->file('file')){
            // Storage photo in database
            $product->photo()->create([
                    'url' => $url
                ]);
            // Intervention Image and processing
            Image::make($request->file)
                ->resize(640,480)
                ->save($ruta);
            }        
        return redirect()->route('admin.products.edit', $product)->with('info', 'El producto se ha creado con exito');
    }

   
    public function show(Product $product)
    {
        return view('admin.products.show');
    }

    public function edit(Product $product)
    {
        $categories = Category::pluck('name', 'id');
        return view('admin.products.edit', compact('product','categories'));
    }

    
    public function update(ProductRequest $request, Product $product)
    {
        
        if($request->file('file')){
            //Obtaining route
             $nombre = $request->file->getClientOriginalName();
             $code = generateBarcodeNumber();
             $url = 'photos/'. $code . $nombre;
             $ruta = storage_path() . '\app\public\photos/'. $code . $nombre;
             //Storage in database
             if($product->photo){
                Storage::disk('public')->delete('photo',$product->photo->url);
                $product->photo->update([
                    'url' => $url
                ]);
            }
             // Intervention Image and processing
        
            Image::make($request->file)
                ->resize(640,480)
                ->save($ruta);
        }
        $product->update($request->all());
        
        return redirect()->route('admin.products.edit',$product)->with('info','El producto se actualizó con éxito');
    }

   
    public function destroy(Product $product)
    {
        // Get all gallery photos from the product
        $gallery = Gallery::where('imageable_id',$product->id)->get();
        // Delete images from galleries
        foreach($gallery as $photo){
            Storage::disk('public')->delete('gallery', $photo->url);
        }
        // Delete images from photos
        Storage::disk('public')->delete('photos', $product->photo->url);
        // Delete photo from database
        $product->photo()->delete();
        // Delete gallery from database
        $product->gallery()->delete();
        // Delete product from database
        $product->delete();
        return redirect()->route('admin.products.index')->with('info','El producto se eliminó con éxito.');
    }
}
