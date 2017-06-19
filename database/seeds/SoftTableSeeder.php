<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoftTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('soft')->insert([
            'name' => 'Coca-cola',
            'type' => 'Soda',
            'color' => '#a21a1c',
        ]);
        DB::table('soft')->insert([
            'name' => 'Soda Club',
            'type' => 'Soda',
            'color' => 'transparent',
        ]);
        DB::table('soft')->insert([
            'name' => 'Grenadine',
            'type' => 'Syrup',
            'color' => '#cb1622',
        ]);
        DB::table('soft')->insert([
            'name' => 'Sugar Syrup',
            'type' => 'Syrup',
            'color' => 'transparent',
        ]);
        DB::table('soft')->insert([
            'name' => 'Sprite',
            'type' => 'Soda',
            'color' => 'transparent',
        ]);
        DB::table('soft')->insert([
            'name' => 'Perrier',
            'type' => 'Sparkling Water',
            'color' => 'transparent',
        ]);
        DB::table('soft')->insert([
            'name' => 'Orange Juce',
            'type' => 'Juce',
            'color' => '#f7b916',
        ]);
        DB::table('soft')->insert([
            'name' => 'Lime Juice',
            'type' => 'Juice',
            'color' => '#e0e6bd',
        ]);
        DB::table('soft')->insert([
            'name' => 'Cranberries Juice',
            'type' => 'Juice',
            'color' => '#b21611',
        ]);

        DB::table('soft')->insert([
            'name' => 'Pineapple Juice',
            'type' => 'Juice',
            'color' => '#f7bb03',
        ]);

        DB::table('soft')->insert([
            'name' => 'Energy Drink',
            'type' => 'Soda',
            'color' => '#feeb7e',
        ]);
    }
}
