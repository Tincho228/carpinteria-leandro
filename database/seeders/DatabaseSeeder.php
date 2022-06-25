<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::disk('public')->deleteDirectory('galleries');
        Storage::disk('public')->makeDirectory('galleries');
        Storage::disk('public')->deleteDirectory('photos');
        Storage::disk('public')->makeDirectory('photos');
       
        $this->call(CategorySeeder::class);
        $this->call(UserSeeder::class); 
        $this->call(ProductSeeder::class);
        $this->call(LinkSeeder::class);
        $this->call(QuestionSeeder::class);
    }
}
