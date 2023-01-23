<?php

namespace Database\Seeders;

use App\Models\Project;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++){
            $new_project = new Project();
            $new_project->name = $faker->sentence(4);
            $new_project->slug = Project::generateSlug($new_project->name);
            $new_project->client_name = $faker->words(3, true);
            $new_project->summary = $faker->paragraph();
            $new_project->save();
        }
    }
}
