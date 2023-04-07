<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
                

                'name'=>'Iphone 14 PRO',
                'price'=>"1000£",
                "description"=>"The iPhone 14 Pro comes with a 6.1-inch ProMotion OLED display with 1-120Hz adaptive refresh rates, Dolby Vision",
                "category"=>"mobile",
                "gallery"=>"https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-14-pro-finish-unselect-gallery-2-202209?wid=5120&hei=2880&fmt=p-jpg&qlt=80&.v=1663790290203",
         
            ],
            [
                

                'name'=>'Samsung Galaxy S20',
                'price'=>"240£",
                "description"=>"With a 10MP Front Camera, and a triple rear camera system, including a huge 64MP Telephoto Camera,",
                "category"=>"mobile",
                "gallery"=>"https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/71efuy+3ZNL._AC_SL1500_.jpg",
            
            ],
            [

                'name'=>'Samsung AU7110 55 Inch Smart TV',
                'price'=>"449£",
                "description"=>"Ultra Clear Picture 4K TV With HDR10+, Crystal Processor, Purcolour, Compatible With Alexa, Adaptive Sound, Samsung Q-Symphony Audio - UE55AU7110KXXU",
                "category"=>"tv",
                "gallery"=>"https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/71bk-qO+CFL._AC_SL1500_.jpg",
            ],
            [
                

                'name'=>'LG LED UQ75 55 4K Smart TV',
                'price'=>"700£",
                "description"=>"Sharp 4K Ultra HD viewing with intelligent processor for a stunning picture,Immersive sound quality with AI Sound,webOS smart platform with Freeview Play, Netflix, Disney+ and more",
                "category"=>"tv",
                "gallery"=>"https://www.lg.com/uk/images/tvs/md07550508/D-1.jpg",
         
            ]
        ]);
    }
}
