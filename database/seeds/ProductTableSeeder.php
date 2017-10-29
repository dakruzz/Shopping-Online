<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'title' => 'Harry Potter',
            'imagePath' => 'https://lh4.googleusercontent.com/-OowXWkgMSHI/AAAAAAAAAAI/AAAAAAAAANE/rOf2DCA2AXo/photo.jpg',
            'description' => 'Hello darkness my old friend.',
            'price' => 10.99,
            'category' => 'books'
        ]);
        $product->save();

    }
}
