<?php

use Illuminate\Database\Seeder;

class aquariumsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fishes')->insert([
          ['name' => 'klein aquarium', 'price' => '10.00'],
          ['name' => 'middel groot aquarium', 'price' => '25.00'],
          ['name' => 'groot aquarium', 'price' => '50.00'],
        ])
    }
}
