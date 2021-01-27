<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([

        [
            "name"=>'Samsung Mobile',
            "price"=>'20000',
            "description"=>'A smart phone with 6gb ram',
            "category"=>'Mobile',
            "gallery"=>'https://static.toiimg.com/thumb/msid-63393984,width-240,resizemode-4,imgv-5/Samsung-Galaxy-J6.jpg',
        ],
        [
            "name"=>'Samsung Monitor',
            "price"=>'30000',
            "description"=>'A smart Monitor with android tv',
            "category"=>'Monitor',
            "gallery"=>'https://i.ebayimg.com/images/g/27wAAOSwCQJfI2c6/s-l300.jpg',
        ],
        [
            "name"=>'Zero Facewash',
            "price"=>'1000',
            "description"=>'A smart phase wash with ',
            "category"=>'Fachwash',
            "gallery"=>'https://19011.store/wp-content/uploads/2020/12/ZERO-FRIZZ-TRIP.BUTTER-TREATMENT-148M-99.9-390x370.jpg',
        ],
        [
            "name"=>'Alive Shuz',
            "price"=>'2000',
            "description"=>'A smart shuz ',
            "category"=>'Shuz',
            "gallery"=>'https://s0.as-img.com/r/drawing/31633/1500/1500/with_msg.jpg?bg=f5f5f5&u=1537650638',
        ],
        [
            "name"=>'Apple Desktop',
            "price"=>'200000',
            "description"=>'A smart Desktop with 8gb ram and 1tb hdd',
            "category"=>'Desktop',
            "gallery"=>'https://i.pinimg.com/originals/89/8b/82/898b82df00f4e35658c2840e09a7abdb.jpg',
        ],

        ]);

    }
}
