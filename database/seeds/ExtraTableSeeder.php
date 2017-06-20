<?php

use Illuminate\Database\Seeder;

class ExtraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('extra')->insert([
            'name' => 'Sugar',
            'enabled' => true,
        ]);
        DB::table('extra')->insert([
            'name' => 'Limes',
            'enabled' => true,
        ]);
        DB::table('extra')->insert([
            'name' => 'Fresh Mint',
            'enabled' => true,
        ]);
        DB::table('extra')->insert([
            'name' => 'Cherry',
            'enabled' => true,
        ]);
    }
}
