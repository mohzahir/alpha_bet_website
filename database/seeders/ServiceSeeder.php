<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::insert([
            [
                'name' => 'Security Solutions',
                'name_ar' => 'حلول الأمان',
                'short_descr' => 'Lorem ipsum dolor sit amet consetetur sadip scing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyamei erat sed diam voluptua at vero eos et accusam et justo duo.',
                'short_descr_ar' => 'تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية',
                'descr' => 'Lorem ipsum dolor sit amet consetetur sadip scing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyamei erat sed diam voluptua at vero eos et accusam et justo duo.',
                'descr_ar' => 'تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية',
                'photo' => 'assets/images/services/services-4.jpg',
                'is_featured' => '0',
            ],
            [
                'name' => 'Product Design',
                'name_ar' => 'تصميم المنتجات',
                'short_descr' => 'Lorem ipsum dolor sit amet consetetur sadip scing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyamei erat sed diam voluptua at vero eos et accusam et justo duo.',
                'short_descr_ar' => 'تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية',
                'descr' => 'Lorem ipsum dolor sit amet consetetur sadip scing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyamei erat sed diam voluptua at vero eos et accusam et justo duo.',
                'descr_ar' => 'تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية',
                'photo' => 'assets/images/services/services-1.jpg',
                'is_featured' => '0',
            ],
            [
                'name' => 'App Development',
                'name_ar' => 'تطوير التطبيقات',
                'short_descr' => 'Lorem ipsum dolor sit amet consetetur sadip scing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyamei erat sed diam voluptua at vero eos et accusam et justo duo.',
                'short_descr_ar' => 'تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية',
                'descr' => 'Lorem ipsum dolor sit amet consetetur sadip scing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyamei erat sed diam voluptua at vero eos et accusam et justo duo.',
                'descr_ar' => 'تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية',
                'photo' => 'assets/images/services/services-2.jpg',
                'is_featured' => '0',
            ],
            [
                'name' => 'Analytic Solutions',
                'name_ar' => 'الحلول الإحصائية',
                'short_descr' => 'Lorem ipsum dolor sit amet consetetur sadip scing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyamei erat sed diam voluptua at vero eos et accusam et justo duo.',
                'short_descr_ar' => 'تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية',
                'descr' => 'Lorem ipsum dolor sit amet consetetur sadip scing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyamei erat sed diam voluptua at vero eos et accusam et justo duo.',
                'descr_ar' => 'تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية',
                'photo' => 'assets/images/services/services-3.jpg',
                'is_featured' => '0',
            ],
            [
                'name' => 'Web Development',
                'name_ar' => 'تصميم المواقع',
                'short_descr' => 'Lorem ipsum dolor sit amet consetetur sadip scing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyamei erat sed diam voluptua at vero eos et accusam et justo duo.',
                'short_descr_ar' => 'تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية',
                'descr' => 'Lorem ipsum dolor sit amet consetetur sadip scing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyamei erat sed diam voluptua at vero eos et accusam et justo duo.',
                'descr_ar' => 'تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية',
                'photo' => 'assets/images/services/services-4.jpg',
                'is_featured' => '1',
            ],
            [
                'name' => 'Graphic Design',
                'name_ar' => 'التصميم الجرافيكي',
                'short_descr' => 'Lorem ipsum dolor sit amet consetetur sadip scing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyamei erat sed diam voluptua at vero eos et accusam et justo duo.',
                'short_descr_ar' => 'تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية',
                'descr' => 'Lorem ipsum dolor sit amet consetetur sadip scing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyamei erat sed diam voluptua at vero eos et accusam et justo duo.',
                'descr_ar' => 'تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية',
                'photo' => 'assets/images/services/services-3.jpg',
                'is_featured' => '1',
            ],
            [
                'name' => 'Network Design',
                'name_ar' => 'تصميم الشبكات',
                'short_descr' => 'Lorem ipsum dolor sit amet consetetur sadip scing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyamei erat sed diam voluptua at vero eos et accusam et justo duo.',
                'short_descr_ar' => 'تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية',
                'descr' => 'Lorem ipsum dolor sit amet consetetur sadip scing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyamei erat sed diam voluptua at vero eos et accusam et justo duo.',
                'descr_ar' => 'تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية',
                'photo' => 'assets/images/services/services-2.jpg',
                'is_featured' => '1',
            ],
            [
                'name' => 'Search Optimization',
                'name_ar' => 'تحسين محركات البحث',
                'short_descr' => 'Lorem ipsum dolor sit amet consetetur sadip scing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyamei erat sed diam voluptua at vero eos et accusam et justo duo.',
                'short_descr_ar' => 'تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية',
                'descr' => 'Lorem ipsum dolor sit amet consetetur sadip scing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyamei erat sed diam voluptua at vero eos et accusam et justo duo.',
                'descr_ar' => 'تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية',
                'photo' => 'assets/images/services/services-1.jpg',
                'is_featured' => '1',
            ],
        ]);
    }
}
