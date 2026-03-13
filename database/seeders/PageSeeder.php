<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Page::firstOrCreate(
            ['id' => 1],
            [
                'title' => 'Welcome to my LSi Coding Exercise solution',
                'content' => '<p>This is my submission where I added the following features. </p><ul><li>Multiple images linked to products</li><li>URL slug for products</li><li>Enquiry form that leads to a preview page</li><li>Responsive styling with tailwind and DaisyUI</li></ul> <p> You can visit the project at: <a class="link" href="https://github.com/scott-lsi/exercise">https://github.com/ADitta/exercise</a>.</p><p>Thank you for visiting!</p>',
            ]
        );
    }
}
