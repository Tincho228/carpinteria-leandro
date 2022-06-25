<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Photo;

class Category extends Model
{
    
    protected $fillable = ['name', 'slug','description'];
    use HasFactory;
    public function getRouteKeyName()
    {
        return 'slug';
    }
    // relacion uno a muchos
    public function products(){
        return $this->hasMany(Product::class);
    }
    // relacion uno a uno polimorfica
    public function photo(){
        return $this->morphOne(Photo::class, 'imageable');
    }
}
