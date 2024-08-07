<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products=[
            [
                'brand_id' => 1,
                'category_id' => 1,
                'name' => 'hp',
                'description'=>'laptop',
                'qty'=>200,
                'alert_stock'=>20
            ],
        ];

        Product::insert($products);
    }
}
