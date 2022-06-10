<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug','description','category_id'];
    public function getRouteKeyName()
    {
        return 'slug';
    }
    // relacion uno a uno polimorfica
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
    // relacion uno a muchos inversa
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
