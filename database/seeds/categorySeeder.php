<?php

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('categories')->insert([
            ['name' => 'Nederlands zoetwater'],
            ['name' => 'Nederlands zoutwater'],
            ['name' => 'Tropisch zoetwater'],
            ['name' => 'Tropisch zoutwater']
          ]);
    }
}
