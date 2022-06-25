<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Photo;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Photo>
 */
class PhotoFactory extends Factory
{
    protected $model = Photo::class;
    public function definition()
    {
        return [
            'url' => 'photos/'. $this->faker->image('public/storage/photos', 640, 480, null, false)
        ];
    }
}
