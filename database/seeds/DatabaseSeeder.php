<?php

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call([
      categorySeeder::class,
      fishesSeeder::class,
      aquariumSeeder::class,
      fishcategoriesSeeder::class
    ]);
  }
}
