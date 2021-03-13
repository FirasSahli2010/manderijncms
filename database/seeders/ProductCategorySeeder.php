<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('product_categories')->insert([
          'title' => 'basis',
          'slug' => '',
          'shw' => 'Y',
          'language' => '2',
          'parent_category' => 0,
          'created_at' => now(),
          'updated_at' => now()
      ]);

      DB::table('product_categories')->insert([
          'title' => 'مجترات',
          'slug' => 'مجترات',
          'shw' => 'Y',
          'language' => '2',
          'parent_category' => 1,
          'created_at' => now(),
          'updated_at' => now()
      ]);

      DB::table('product_categories')->insert([
          'title' => 'أبقار حليب',
          'slug' => 'أبقار',
          'shw' => 'Y',
          'language' => '2',
          'parent_category' => 1,
          'created_at' => now(),
          'updated_at' => now()
      ]);

      DB::table('product_categories')->insert([
          'title' => 'دواجن',
          'slug' => 'دواجن',
          'shw' => 'Y',
          'language' => '2',
          'parent_category' => 1,
          'created_at' => now(),
          'updated_at' => now()
      ]);

      DB::table('product_categories')->insert([
          'title' => 'Dairy Cow',
          'slug' => 'dairy-cow',
          'shw' => 'Y',
          'language' => '1',
          'parent_category' => 1,
          'created_at' => now(),
          'updated_at' => now()
      ]);

      DB::table('product_categories')->insert([
          'title' => 'milk cattle',
          'slug' => 'dairy-cattle',
          'shw' => 'Y',
          'language' => '1',
          'parent_category' => 1,
          'created_at' => now(),
          'updated_at' => now()
      ]);

      DB::table('product_categories')->insert([
          'title' => 'Poultry',
          'slug' => 'poultry',
          'shw' => 'Y',
          'language' => '1',
          'parent_category' => 1,
          'created_at' => now(),
          'updated_at' => now()
      ]);
    }
}
