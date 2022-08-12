<?php

namespace Database\Seeders;

use App\Models\ProjectImage;
use Illuminate\Database\Seeder;

class ProjectImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProjectImage::insert([
            [
                'project_id' => '1',
                'title' => 'no title',
                'path' => 'assets/images/projects/projects-1.jpg',
            ],
            [
                'project_id' => '2',
                'title' => 'no title',
                'path' => 'assets/images/projects/projects-2.jpg',
            ],
            [
                'project_id' => '1',
                'title' => 'no title',
                'path' => 'assets/images/projects/projects-3.jpg',
            ],
            [
                'project_id' => '2',
                'title' => 'no title',
                'path' => 'assets/images/projects/projects-4.jpg',
            ],
            [
                'project_id' => '2',
                'title' => 'no title',
                'path' => 'assets/images/projects/projects-5.jpg',
            ],
        ]);
    }
}
