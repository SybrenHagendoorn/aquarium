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
      DB::table('fish')->insert([
        ['name' => 'goudvis', 'watertype' => 'nederlands zoetwater', 'description' => 'goude vis', 'price' => '15.00'],
        ['name' => 'haai', 'watertype' => 'tropisch zoutwater', 'description' => 'eet mensen', 'price' => '100.00'],
        ['name' => 'nemo', 'watertype' => 'tropisch zoutwater', 'description' => 'film vis', 'price' => '49.95'],
        ['name' => 'blobvis', 'watertype' => 'tropisch zoutwater', 'description' => 'lelijke vis', 'price' => '5.00'],
        ['name' => 'platvis', 'watertype' => 'tropisch zoetwater', 'description' => 'een platte vis', 'price' => '20.95'],
        ['name' => 'paling', 'watertype' => 'nederlands zoetwater', 'description' => 'soort van slang in het water', 'price' => '10.00'],
        ['name' => 'baars', 'watertype' => 'nederlands zoetwater', 'description' => 'komt vaak voor in een meer of watertje', 'price' => '4.99'],
        ['name' => 'Golden Basslet', 'watertype' => 'tropisch zoetwater', 'description' => 'duren vis', 'price' => '8000.00']
      ]);
    }
}
