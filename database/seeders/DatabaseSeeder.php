<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Brand;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use Spatie\Permission\Models\Role;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

            User::factory()->create([
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin')
            ]);

        $roles= [
            
            ['name'=>'Admin'],

            ['name'=>'Customer'],

            ['name'=>'Delivery'],

        ];

        foreach ($roles as $row)
        {
            Role::create($row);
        }


        $categories =[ 
            ['name' => 'Pen'],
            ['name' => 'Pencil'],
            ['name' => 'Scale'],
            
        ];

        Category::insert($categories);

        $carts=[
            'customer_id'=>1,
            'product_id'=>2,
            'qty'=>100,
        ];

        Cart::insert($carts);



        Brand::insert($brands);

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
