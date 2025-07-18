<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = new Product([
            'product_name' => 'ノート5冊セット',
            'price' => 600,
            'vendor_code' => 1111
        ]);

        $product->save();
    }
}
