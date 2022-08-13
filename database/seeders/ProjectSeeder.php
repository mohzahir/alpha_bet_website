<?php

namespace Database\Seeders;

use App\Models\project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        project::insert([
            [
                'service_id' => 1,
                'client_id' => 1,
                'name' => 'OT Mobile Application',
                'name_ar' => 'تطبيق التجارة الالكترونية',
                'start_date' => '2020-02-01',
                'finish_date' => '2021-01-01',
                'location' => 'sudan',
                'location_ar' => 'السوان',
                'short_descr' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi aspernatur inventore.',
                'short_descr_ar' => 'وصف قصير وصف قصير وصف قصير وصف قصير وصف قصير وصف قصير وصف قصير وصف قصير',
                'descr' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi aspernatur inventore velit corporis odit sequi minus, quaerat obcaecati porro. Porro odio quidem quam tempora magni praesentium voluptatibus earum dolor veritatis.',
                'descr_ar' => 'وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل',
                'is_featured' => '1',
                'status' => 'active',
                'photo' => 'assets/images/projects/projects-1.jpg',
            ],
            [
                'service_id' => '2',
                'client_id' => 1,
                'name' => 'Alpha beta Websit ',
                'name_ar' => 'مقع شركة الفا بيتا الالكتروني',
                'start_date' => '2020-02-01',
                'finish_date' => '2021-01-01',
                'location' => 'sudan',
                'location_ar' => 'السوان',
                'short_descr' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi aspernatur inventore.',
                'short_descr_ar' => 'وصف قصير وصف قصير وصف قصير وصف قصير وصف قصير وصف قصير وصف قصير وصف قصير',
                'descr' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi aspernatur inventore velit corporis odit sequi minus, quaerat obcaecati porro. Porro odio quidem quam tempora magni praesentium voluptatibus earum dolor veritatis.',
                'descr_ar' => 'وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل',
                'is_featured' => '1',
                'status' => 'active',
                'photo' => 'assets/images/projects/projects-2.jpg',
            ],
            [
                'service_id' => '1',
                'client_id' => 1,
                'name' => 'traffic management system',
                'name_ar' => 'نظام الكتروني لادارة المخالفات المرورية',
                'start_date' => '2020-02-01',
                'finish_date' => '2021-01-01',
                'location' => 'sudan',
                'location_ar' => 'السوان',
                'short_descr' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi aspernatur inventore.',
                'short_descr_ar' => 'وصف قصير وصف قصير وصف قصير وصف قصير وصف قصير وصف قصير وصف قصير وصف قصير',
                'descr' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi aspernatur inventore velit corporis odit sequi minus, quaerat obcaecati porro. Porro odio quidem quam tempora magni praesentium voluptatibus earum dolor veritatis.',
                'descr_ar' => 'وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل',
                'is_featured' => '1',
                'status' => 'active',
                'photo' => 'assets/images/projects/projects-3.jpg',
            ],
            [
                'service_id' => '3',
                'client_id' => 1,
                'name' => 'Resturant management system',
                'name_ar' => 'نظام الكتروني لادارة المطاعم',
                'start_date' => '2020-02-01',
                'finish_date' => '2021-01-01',
                'location' => 'sudan',
                'location_ar' => 'السوان',
                'short_descr' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi aspernatur inventore.',
                'short_descr_ar' => 'وصف قصير وصف قصير وصف قصير وصف قصير وصف قصير وصف قصير وصف قصير وصف قصير',
                'descr' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi aspernatur inventore velit corporis odit sequi minus, quaerat obcaecati porro. Porro odio quidem quam tempora magni praesentium voluptatibus earum dolor veritatis.',
                'descr_ar' => 'وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل وصف طويل',
                'is_featured' => '1',
                'status' => 'active',
                'photo' => 'assets/images/projects/projects-4.jpg',
            ],
        ]);
    }
}
