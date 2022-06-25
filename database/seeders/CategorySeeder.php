<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Photo;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $categorias = Category::factory(4)->create();
        foreach($categorias as $categoria){
            Photo::factory(1)->create([
                'imageable_id' => $categoria->id,
                'imageable_type' => Category::class
            ]);
        }
    }
}
