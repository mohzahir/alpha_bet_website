<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::insert([
            [
                'descr' => 'We are leading technology solutions providing company all over the world doing over 40 years lorem ipsum dolor sit amet. We are leading technology solutions providing company all over the world doing over 40 years. Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam non umy eirmod tempor invidunt ut labore.',
                'descr_ar' => 'نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي',
                'goal' => 'We are leading technology solutions providing company all over the world doing over 40 years. Lorem ipsum dolor sit amet consetetur sadipscing elitre sed diam non umy eirmod tempor invidunt ut labore.',
                'goal_ar' => 'نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي',
                'mission' => 'Lorem ipsum dolor sit amet consetetur sadip scing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyamei erat sed diam voluptua at vero eos et accusam et justo duo.',
                'mission_ar' => 'نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي',
                'vision' => 'Lorem ipsum dolor sit amet consetetur sadip scing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyamei erat sed diam voluptua at vero eos et accusam et justo duo.',
                'vision_ar' => 'نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي',
                'skill1_name' => 'Software Development',
                'skill1_name_ar' => 'تطوير البرمجيات',
                'skill1_rate' => '88',
                'skill2_name' => 'App Development',
                'skill2_name_ar' => 'تطوير التطبيقات',
                'skill2_rate' => '90',
                'skill3_name' => 'Artificial Intelligence',
                'skill3_name_ar' => 'الزكاء الاصطناعي',
                'skill3_rate' => '50',
                'skill4_name' => 'Cyber Security',
                'skill4_name_ar' => 'امن المعلومات',
                'skill4_rate' => '70',
            ],
        ]);
    }
}
