<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = Project::all();
        foreach($projects as $project){
            $category_id = Category::inRandomOrder()->first()->id;
            $project->category_id = $category_id;
            $project->update();
        }
    }
}
