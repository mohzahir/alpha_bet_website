<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::insert([
            [
                'company_name' => 'Alpha Beta',
                'company_name_ar' => 'الفا بيتا',
                'logo' => 'assets/images/logo.png',
                'logo_black' => 'assets/images/black-logo.png',
                'facebook_link' => 'facebook.com',
                'twitter_link' => 'twitter.com',
                'linkedin_link' => 'linkedin.com',
                'youtube_link' => 'youtube.com',
                'instagram_link' => 'instagram',
                'phone1' => '249927942031',
                'phone2' => '249129813834',
                'email' => 'moh.zahir.mz@gmail.com',
                'location' => 'Saudi Arabia, Damam',
                'location_ar' => 'المملكة العربيه السعودية, الدمام',
                'google_map_link' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102948.35266648312!2d-115.15540073403864!3d36.26047650441708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c8c2b00ad43d33%3A0x22c7fa13f5acf526!2sNorth%20Las%20Vegas%2C%20NV%2C%20USA!5e0!3m2!1sen!2sbd!4v1639919075838!5m2!1sen!2sbd',
            ],
        ]);
    }
}
