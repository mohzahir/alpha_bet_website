<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::insert([
            [
                'name' => 'Ali Hassan',
                'name_ar' => 'علي حسن',
                'job_title' => 'Web Developer',
                'job_title_ar' => 'مطور مواقع ويب',
                'facebook_link' => 'http://facebook.com',
                'linkedin_link' => 'http://facebook.com',
                'twitter_link' => 'http://facebook.com',
                'photo' => 'assets/images/team/team-1.png',
            ],
            [
                'name' => 'Ali Hassan',
                'name_ar' => 'علي حسن',
                'job_title' => 'Web Developer',
                'job_title_ar' => 'مطور مواقع ويب',
                'facebook_link' => 'http://facebook.com',
                'linkedin_link' => 'http://facebook.com',
                'twitter_link' => 'http://facebook.com',
                'photo' => 'assets/images/team/team-2.png',
            ],
            [
                'name' => 'Ali Hassan',
                'name_ar' => 'علي حسن',
                'job_title' => 'Web Developer',
                'job_title_ar' => 'مطور مواقع ويب',
                'facebook_link' => 'http://facebook.com',
                'linkedin_link' => 'http://facebook.com',
                'twitter_link' => 'http://facebook.com',
                'photo' => 'assets/images/team/team-3.png',
            ],
            [
                'name' => 'Ali Hassan',
                'name_ar' => 'علي حسن',
                'job_title' => 'Web Developer',
                'job_title_ar' => 'مطور مواقع ويب',
                'facebook_link' => 'http://facebook.com',
                'linkedin_link' => 'http://facebook.com',
                'twitter_link' => 'http://facebook.com',
                'photo' => 'assets/images/team/team-4.png',
            ],
        ]);
    }
}
