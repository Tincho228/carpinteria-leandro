<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use App\Models\Gallery;
use Intervention\Image\Facades\Image;

class GalleryIndex extends Component
{
    use WithFileUploads;
    public $product;
    public $image ;
    public $photo_delete_id;
    protected $rules = [
        'image' =>'required|image'
    ];
    public function storePhoto()
    {

        $this->validate();
        //Obtaining route
        $nombre = $this->image->getClientOriginalName();
        $code = generateBarcodeNumber();
        $url = 'galleries/'. $code . $nombre;
        $ruta = storage_path() . '\app\public\galleries/'. $code . $nombre;
        // $url = Storage::disk('public')->put('products',$this->image);
        //Storage in database
        $this->product->gallery()->create([
            'url' => $url
        ]);
        // Intervention Image and processing
        
        Image::make($this->image)
            ->resize(640,480)
            ->save($ruta);
        // Cerrar el modal automaticamente
        session()->flash('info', 'La imagen se subio con exito');
        $this->reset(['image']);
        $this->dispatchBrowserEvent('closeModal');
        $this->emitTo('image-index','render');
        
         
    }
     public function deleteConfirmation($id)
     {
        $this->photo_delete_id = $id;
        $this->dispatchBrowserEvent('show-deleteConfirmation');
    }
    public function deletePhoto()
    {
        $photo = Gallery::where('id',$this->photo_delete_id)->first();
        Storage::disk('public')->delete('gallery',$photo->url);
        $photo->delete();
        session()->flash('info', 'La imagen se eliminó con exito');
        $this->dispatchBrowserEvent('closeModal');
        $this->emitTo('gallery-index','render');
    }
    public function cancel()
    {
        $this->photo_delete_id = '';
     }
    public function render()
    {
        $galleries = Gallery::where('imageable_id', $this->product->id)->get();
        return view('livewire.admin.gallery-index', compact('galleries'));
    }
}
