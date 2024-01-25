<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductStep;
use Illuminate\Database\Seeder;

class CloneDataStepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productSteps = ProductStep::query()->whereNotIn('id', [22])
            ->where('product_id', 1)
            ->get()
            ->toArray();
        $products = Product::query()->whereNotIn('id', [3,2,1])->get()->toArray();
        foreach ($productSteps as $productStep) {
           foreach ($products as $product) {
               $dataNeedToAdded = $productStep;
               $dataNeedToAdded['product_id'] = $product['id'];
               unset($dataNeedToAdded['id']);
               ProductStep::query()->create($dataNeedToAdded);
           }
        }
    }
}
