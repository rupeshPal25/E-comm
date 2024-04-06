<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
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
        //
        DB::table('products')->insert([
            [
                'name' => 'LG Mobile',
                "price" => "10000",
                "description" => "a smart phone with 4gb ram and much more features",
                "category" => "mobile",
                "gallery" => "https://cdn1.smartprix.com/rx-i0t5g5jt0-w1200-h1200/0t5g5jt0.jpg"

            ],
            [
                'name' => 'Oppo Mobile',
                "price" => "12000",
                "description" => "a smart phone with 4gb ram and much more features",
                "category" => "mobile",
                "gallery" => "https://cdn1.smartprix.com/rx-i0t5g5jt0-w1200-h1200/0t5g5jt0.jpg"

            ],
            [
                'name' => 'Lava Mobile',
                "price" => "13000",
                "description" => "a smart phone with 4gb ram and much more features",
                "category" => "mobile",
                "gallery" => "https://cdn1.smartprix.com/rx-i0t5g5jt0-w1200-h1200/0t5g5jt0.jpg"

            ],
            [
                'name' => 'Vivo Mobile',
                "price" => "10000",
                "description" => "a smart phone with 4gb ram and much more features",
                "category" => "mobile",
                "gallery" => "https://cdn1.smartprix.com/rx-i0t5g5jt0-w1200-h1200/0t5g5jt0.jpg"

            ]

        ]);
    }
}
