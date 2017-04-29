<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        DB::table('projects')->insert([
          'user_id' => 1,
          'name' => 'plan',
          'description' => 'Project/Task Management Web Application',
          'github_link' => '#',
          'site_link' => '#',
        ]);

        DB::table('projects')->insert([
          'user_id' => 1,
          'name' => 'talk',
          'description' => 'Diary/Post Feed Web Application',
          'github_link' => '#',
          'site_link' => '#',
        ]);

        DB::table('projects')->insert([
          'user_id' => 1,
          'name' => 'lettings',
          'description' => 'Property Lettings Web Application',
          'github_link' => '#',
          'site_link' => '#',
        ]);
    }
}
