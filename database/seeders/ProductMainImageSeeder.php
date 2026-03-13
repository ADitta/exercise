<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Database\Seeder;

class ProductMainImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::find(1)->update(['main_image_id' => 1]);
        Product::find(2)->update(['main_image_id' => 9]);
        Product::find(3)->update(['main_image_id' => 14]);
        Product::find(4)->update(['main_image_id' => 15]);
    }
}
