<?php

namespace Database\Factories;

use App\Models\Gallery;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gallery>
 */
class GalleryFactory extends Factory
{
    
    protected $model = Gallery::class;
    
    public function definition()
    {
        return [
            'url' => 'galleries/'. $this->faker->image('public/storage/galleries', 640, 480, null, false)
        ];
    }
}
