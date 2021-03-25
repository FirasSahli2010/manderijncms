<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;

use App\Models\Product;
use App\Models\product_category;
use App\Models\Languages;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $product = new Product([
        'name'  =>  'أمنوفليت',
        'slug' => 'أمنوفليت',
        'price' =>  199.99,
        'language_id' => 2
      ]);
      $product->save();

      $categories = product_category::find([2,3]); // Modren Chairs, Home Chairs
      $language = Languages::find([2]); // Modren Chairs, Home Chairs
      $product->categories()->attach($categories);
      //$product->language()->associate($language);

      $product->save();
    }
}
