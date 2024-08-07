<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [

            [ 'name'=>'hp'],
            [ 'name'=>'Dell'],
            [ 'name'=>'Intel'],
            [ 'name'=>'Acer'],
            [ 'name'=>'Lenova'],

        ];

        Brand::insert($brands);
    }
}
