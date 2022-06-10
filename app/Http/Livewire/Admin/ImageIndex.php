<?php

namespace App\Http\Livewire\Admin;

use App\Models\Image;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class ImageIndex extends Component
{
    use WithFileUploads;
    public $product;
    public $image ;
    protected $rules = [
        'image' =>'required|image'
    ];

    public function storePhoto()
    {
        $this->validate();
        $url = Storage::disk('public')->put('products',$this->image);

        $this->product->image()->create([
            'url' => $url
        ]);
        session()->flash('info', 'La imagen se subio con exito');

        $this->reset(['image']);
        // Cerrar el modal automaticamente
        $this->dispatchBrowserEvent('closeModal');

        $this->emitTo('image-index','render');
         
    }
     public function deleteConfirmation($id)
     {
    //     $this->photo_delete_id = $id;
    //     $this->dispatchBrowserEvent('show-deleteConfirmation');
    // }
    // public function deletePhoto()
    // {
    //     $photo = Gallery::where('id',$this->photo_delete_id)->first();
    //     Storage::disk('public')->delete('galleries',$photo->url);
    //     $photo->delete();
    //     session()->flash('info', 'La imagen se eliminó con exito');
    //     $this->dispatchBrowserEvent('closeModal');
    //     $this->emitTo('gallery-index','render');
    // }
    // public function cancel()
    // {
    //     $this->photo_delete_id = '';
     }

    public function render()
    {
        $images = Image::where('imageable_id', $this->product->id)->get();
        return view('livewire.admin.image-index', compact('images'));
    }
}
