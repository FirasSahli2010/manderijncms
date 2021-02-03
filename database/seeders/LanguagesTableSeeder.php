<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            'name' => 'English',
            'code' => 'en',
            'shw' => 'Y',
            'locale' => 'en_US',
            'translation'=> 'English',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('languages')->insert([
            'name' => 'العربية',
            'code' => 'ar',
            'shw' => 'Y',
            'locale' => 'ar-sy',
            'translation'=> 'العربية',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
