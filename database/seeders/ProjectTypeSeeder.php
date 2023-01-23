<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = Project::all();

        foreach($projects as $project){
            $project_id = Project::inRandomOrder()->first()->id;
            $project->project_id = $project_id;
            $project->update();
        }
    }
}
