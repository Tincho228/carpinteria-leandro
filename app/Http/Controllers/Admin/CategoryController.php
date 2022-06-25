<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use App\Models\Photo;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Category::all();
        return view('admin.categories.index',compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        //Storage in database
        $category = Category::create($request->all());
        
        //Obtaining route
        $nombre = $request->file->getClientOriginalName();
        $code = generateBarcodeNumber();
        $url = 'photos/'. $code . $nombre;
        $ruta = storage_path() . '\app\public\photos/' . $code .  $nombre ;
        if($request->file('file')){
            $category->photo()->create([
                    'url' => $url
                ]);
            // Intervention Image and processing
            Image::make($request->file)
                ->resize(640,480)
                ->save($ruta);
            }
        return redirect()->route('admin.categories.edit', $category)->with('info', 'La categoria se ha creado con exito');
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category)
    {
        if($request->file('file')){
            //Obtaining route
             $nombre = $request->file->getClientOriginalName();
             $code = generateBarcodeNumber();
             $url = 'photos/'. $code . $nombre;
             $ruta = storage_path() . '\app\public\photos/'. $code . $nombre;
             //Storage in database
             if($category->photo){
                Storage::disk('public')->delete('photo',$category->photo->url);
                $category->photo->update([
                    'url' => $url
                ]);
            }
             // Intervention Image and processing
        
            Image::make($request->file)
                ->resize(640,480)
                ->save($ruta);
        }
        
        $category->update($request->all());
        

        return redirect()->route('admin.categories.edit',$category)->with('info','La categoría se actualizó con éxito');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        Storage::disk('public')->delete('photos', $category->photo->url);
        $category->photo()->delete();
        $category->delete();
        return redirect()->route('admin.categories.index')->with('info','La categoria se eliminó con éxito.');
    }
}
