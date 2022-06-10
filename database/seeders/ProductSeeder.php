<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::factory(20)->create();
        foreach($products as $product){
            Image::factory(4)->create([
                'imageable_id' => $product->id,
                'imageable_type' => Product::class
            ]);
        }
    }
}
