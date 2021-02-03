<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SiteSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('site_settings')->insert([
          'site_title' => 'Acdivet::Veterinary drug industry',
          'language' => 1,
          'site_name' => 'Acdivet',
          'site_icon' => '',
          'site_meta_desc'=> 'English',
          'site_meta_keywords'=> 'English',
          'site_content_rights'=> 'English',
          'site_name_in_page_title'=> 'Y',
          'created_at' => now(),
          'updated_at' => now()
      ]);

      DB::table('site_settings')->insert([
          'site_title' => 'أكبيطرة :: أكديميا لصناعة الأدوية البيطرية',
          'language' => 2,
          'site_name' => ' أكبيطرة',
          'site_icon' => '',
          'site_meta_desc'=> 'English',
          'site_meta_keywords'=> 'English',
          'site_content_rights'=> 'English',
          'site_name_in_page_title'=> 'Y',
          'created_at' => now(),
          'updated_at' => now()
      ]);
    }
}
