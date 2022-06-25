<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gallery;
use App\Models\Photo;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug','description','status','category_id'];
    public function getRouteKeyName()
    {
        return 'slug';
    }
    // relacion uno a uno polimorfica
    public function gallery(){
        return $this->morphOne(Gallery::class, 'imageable');
    }
    // relacion uno a muchos inversa
    public function category(){
        return $this->belongsTo(Category::class);
    }
    // relacion uno a uno polimorfica
    public function photo(){
        return $this->morphOne(Photo::class, 'imageable');
    }
}
