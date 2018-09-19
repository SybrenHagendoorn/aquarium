<?php

use Illuminate\Database\Seeder;

class fishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fishes')->insert([
          ['name' => 'goudvis', 'water_type' => 'nederlands zoutwater', 'description' => 'goude vis', 'price' => '15.00'],
          ['name' => 'haai', 'water_type' => 'tropisch zoutwater', 'description' => 'eet mensen', 'price' => '100.00'],
          ['name' => 'nemo', 'water_type' => 'tropisch zoutwater', 'description' => 'film vis', 'price' => '49.95'],
          ['name' => 'blobvis', 'water_type' => 'tropisch zoutwater', 'description' => 'lelijke vis', 'price' => '5.00'],
          ['name' => 'platvis', 'water_type' => 'tropisch zoetwater', 'description' => 'een platte vis', 'price' => '20.95'],
          ['name' => 'paling', 'water_type' => 'nederlands zoetwater', 'description' => 'soort van slang in het water', 'price' => '10.00'],
          ['name' => 'baars', 'water_type' => 'nederlands zoetwater', 'description' => 'komt vaak voor in een meer of watertje', 'price' => '4.99'],
          ['name' => 'Golden Basslet', 'water_type' => 'tropisch zoetwater', 'description' => 'duren vis', 'price' => '8000.00']
        ]);

    }
}
