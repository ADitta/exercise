<?php

namespace Database\Seeders;

use App\Models\ProductImage;
use Illuminate\Database\Seeder;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductImage::firstOrCreate(
            ['id' => 1],
            [
                'name' => 'example-product-1.jpg',
                'alt' => 'image of Example Product 1',
                'product_id' => 1
            ]
        );
        ProductImage::firstOrCreate(
            ['id' => 2],
            [
                'name' => 'example-product-1-black.jpg',
                'alt' => 'image of Example Product 1 black',
                'product_id' => 1
            ]
        );
        ProductImage::firstOrCreate(
            ['id' => 3],
            [
                'name' => 'example-product-1-white.jpg',
                'alt' => 'image of Example Product 1 white',
                'product_id' => 1
            ]
        );
        ProductImage::firstOrCreate(
            ['id' => 4],
            [
                'name' => 'example-product-2-black.jpg',
                'alt' => 'image of Example Product 2 black',
                'product_id' => 2
            ]
        );
        ProductImage::firstOrCreate(
            ['id' => 5],
            [
                'name' => 'example-product-2-blue.jpg',
                'alt' => 'image of Example Product 2 blue',
                'product_id' => 2
            ]
        );
        ProductImage::firstOrCreate(
            ['id' => 6],
            [
                'name' => 'example-product-2-darkblue.jpg',
                'alt' => 'image of Example Product 2 dark blue',
                'product_id' => 2
            ]
        );
        ProductImage::firstOrCreate(
            ['id' => 7],
            [
                'name' => 'example-product-2-orange.jpg',
                'alt' => 'image of Example Product 2 orange',
                'product_id' => 2
            ]
        );
        ProductImage::firstOrCreate(
            ['id' => 8],
            [
                'name' => 'example-product-2-red.jpg',
                'alt' => 'image of Example Product 2 red',
                'product_id' => 2
            ]
        );
        ProductImage::firstOrCreate(
            ['id' => 9],
            [
                'name' => 'example-product-2.jpg',
                'alt' => 'image of Example Product 2',
                'product_id' => 2
            ]
        );

        ProductImage::firstOrCreate(
            ['id' => 10],
            [
                'name' => 'example-product-3-black.jpg',
                'alt' => 'image of Example Product 3 black',
                'product_id' => 3
            ]
        );
        ProductImage::firstOrCreate(
            ['id' => 11],
            [
                'name' => 'example-product-3-blue.jpg',
                'alt' => 'image of Example Product 3 blue',
                'product_id' => 3
            ]
        );
        ProductImage::firstOrCreate(
            ['id' => 12],
            [
                'name' => 'example-product-3-grey.jpg',
                'alt' => 'image of Example Product 3 grey',
                'product_id' => 3
            ]
        );
        ProductImage::firstOrCreate(
            ['id' => 13],
            [
                'name' => 'example-product-3-red.jpg',
                'alt' => 'image of Example Product 3 red',
                'product_id' => 3
            ]
        );
        ProductImage::firstOrCreate(
            ['id' => 14],
            [
                'name' => 'example-product-3.jpg',
                'alt' => 'image of Example Product 3',
                'product_id' => 3
            ]
        );
        ProductImage::firstOrCreate(
            ['id' => 15],
            [
                'name' => 'example-product-4.jpg',
                'alt' => 'image of Example Product 4',
                'product_id' => 4
            ]
        );
        ProductImage::firstOrCreate(
            ['id' => 16],
            [
                'name' => 'example-product-4-black.jpg',
                'alt' => 'image of Example Product 4 black',
                'product_id' => 4
            ]
        );
        ProductImage::firstOrCreate(
            ['id' => 17],
            [
                'name' => 'example-product-4-red.jpg',
                'alt' => 'image of Example Product 4 red',
                'product_id' => 4
            ]
        );
    }
}
