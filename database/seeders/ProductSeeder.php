<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'Oppo F9 Pro',
                'price'=>'15,000',
                'category'=>'Mobile',
                'description'=>'There will be a 4GB RAM (Oppo F9) and 64GB storage',
                'gallery'=>'https://www.gizbot.com/images/2018-08/oppo-f9-pro_1534846912120.jpg',
            ],
            [
                'name'=>'OPPO A5',
                'price'=>'10,000',
                'category'=>'Mobile',
                'description'=>'OPPO A5 comes with a 6.2 inches Capacitive Touchscreen display with a screen resolution of 720 x 1520 pixels. Display type IPS LCD.',
                'gallery'=>'https://www.gizbot.com/images/2018-07/oppo-a5_1531119912190.jpg',
            ],
            [
                'name'=>'Realme Smart TV ',
                'price'=>'71,000',
                'category'=>'Smart TV',
                'description'=>'The Realme Smart TV runs Android TV 9 Pie and is bundled with Google Play Store. Also, it is pre-installed with Amazon Prime Video, Netflix and YouTube.',
                'gallery'=>'https://www.gizbot.com/images/2020-05/realme-android-smart-tv-tv-43_159047803000.jpg',
            ],
            [
                'name'=>'Lenovo ',
                'price'=>'25,000',
                'category'=>'laptop ',
                'description'=>'However, the laptop is designed specifically to cater to the premium lifestyle category and packs several features that make it worth the price.',
                'gallery'=>'https://www.gizbot.com/images/2020-11/lenovo-yoga-slim-7-review_160567945320.jpg',
            ],
            [
                'name'=>'Honor ',
                'price'=>'20,000',
                'category'=>'laptop ',
                'description'=>'Here are the pictures of the latest mid-range laptop from Honor -- the Honor MagicBook 14 powered by the latest Intel processor with a 1080p display.',
                'gallery'=>'https://www.gizbot.com/images/2020-07/honor-magicbook-14_159497581370.jpg',
            ],
        ]);


    }
}
