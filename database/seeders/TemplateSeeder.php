<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $tamplates = [

        [
          'name' => 'title_img',
          'title' => 'title image',
          'created_at' => now(),
          'updated_at' => now()
      ],
      [
          'name' => 'title_txt',
          'title' => 'title text',
          'created_at' => now(),
          'updated_at' => now()
      ],

      [
          'name' => 'title_img_2',
          'title' => 'title imaghe * 2',
          'created_at' => now(),
          'updated_at' => now()
      ],
      [
          'name' => 'title_txt_2',
          'title' => 'title text * 2',
          'created_at' => now(),
          'updated_at' => now()
      ],

      [
          'name' => 'title_img_2_not_equal',
          'title' => 'title image * 2 customized',
          'created_at' => now(),
          'updated_at' => now()
      ],
      [
          'name' => 'title_txt_2_not_equal',
          'title' => 'title text * 2 customized',
          'created_at' => now(),
          'updated_at' => now()
      ],

      [
          'name' => 'title_img_3',
          'title' => 'title image * 3',
          'created_at' => now(),
          'updated_at' => now()
      ],
      [
          'name' => 'title_txt_3',
          'title' => 'title text * 3',
          'created_at' => now(),
          'updated_at' => now()
      ],

      [
          'name' => 'title_img_3_not_equal',
          'title' => 'title image * 3 customized',
          'created_at' => now(),
          'updated_at' => now()
      ],
      [
          'name' => 'title_txt_3_not_equal',
          'title' => 'title text * 3 customized',
          'created_at' => now(),
          'updated_at' => now()
      ],

      [
          'name' => 'title_list',
          'title' => 'title list',
          'created_at' => now(),
          'updated_at' => now()
      ],

      [
          'name' => 'image_slider',
          'title' => 'image slider',
          'created_at' => now(),
          'updated_at' => now()
      ],

      [
          'name' => 'photo_galary',
          'title' => 'photo galary',
          'created_at' => now(),
          'updated_at' => now()
      ],
    ];
      // DB::table('templates')->insert(   );
    foreach ($tamplates as $rows) {
         //$insert = DB::table('departments')->insert($mul_rows); old
         $insert= DB::table('templates')->insert($rows);
        if($insert){
        //success message here
        }else{
        //Failure message here
        }
      }
    }
}
