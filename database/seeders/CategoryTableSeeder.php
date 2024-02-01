<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ['Front-end','Back-end','Full-stack','App'];
        foreach($data as $item){
            $newCategory = new Category();
            $newCategory->name = $item;
            $newCategory->slug = Project::generateSlug($newCategory->name);
            $newCategory->save();
        }
    }
}
