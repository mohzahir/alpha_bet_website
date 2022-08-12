<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::insert([
            [
                'name' => 'Solit IT Group',
                'name_ar' => 'شركة سوليت للحلول التقنية',
                'phone' => '249129813834',
                'email' => 'solit@gmail.com',
                'descr' => 'no description',
                'descr_ar' => 'لا يوجد وصف',
                'location' => 'sudan',
                'location_ar' => 'السودان',
                'logo' => 'assets/images/partner/partner-6.png',
                'is_featured' => '1',
            ],
        ]);
    }
}
