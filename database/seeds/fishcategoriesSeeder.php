<?php

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class fishcategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('fish_categories')->insert([
      ['fish_id' => 1, 'category_id' => 1],
      ['fish_id' => 2, 'category_id' => 4],
      ['fish_id' => 3, 'category_id' => 4],
      ['fish_id' => 4, 'category_id' => 4],
      ['fish_id' => 5, 'category_id' => 4],
      ['fish_id' => 6, 'category_id' => 1],
      ['fish_id' => 7, 'category_id' => 1],
      ['fish_id' => 8, 'category_id' => 4]

      ]);
    }
}
