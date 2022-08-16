<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            [
                'name' => 'Inventory Management System',
                'name_ar' => 'نظام ادارة المخازن',
                'descr' => 'Lorem ipsum dolor sit amet consetetur sadip scing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyamei erat sed diam voluptua at vero eos et accusam et justo duo.',
                'descr_ar' => 'تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية',
                'photo' => 'assets/images/features/features-1.png',
                'is_featured' => '1',
            ],
            [
                'name' => 'OTP System',
                'name_ar' => 'نظام OTP ',
                'descr' => 'Lorem ipsum dolor sit amet consetetur sadip scing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyamei erat sed diam voluptua at vero eos et accusam et justo duo.',
                'descr_ar' => 'تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية',
                'photo' => 'assets/images/features/features-2.png',
                'is_featured' => '1',
            ],
            [
                'name' => 'Barcode Reader System',
                'name_ar' => 'نظام قائ الباركود',
                'descr' => 'Lorem ipsum dolor sit amet consetetur sadip scing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyamei erat sed diam voluptua at vero eos et accusam et justo duo.',
                'descr_ar' => 'تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية تصميم المنتجات باحترافية عالية',
                'photo' => 'assets/images/features/features-3.png',
                'is_featured' => '1',
            ],
        ]);
    }
}
