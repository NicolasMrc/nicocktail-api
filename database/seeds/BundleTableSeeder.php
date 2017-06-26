<?php

use App\Models\Alcohol;
use App\Models\Bundle;
use App\Models\Extra;
use App\Models\Soft;
use Illuminate\Database\Seeder;

class BundleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bundle = Bundle::create([
            'name' => 'Blue Lagoon',
            'description' => 'Acid cocktail loved for its deep blue color',
            'image' => 'blue_lagoon.png',
            'price' => 35,
            'discount' => 0,
            'is_custom' => false
        ]);

        $bundle->softs()->save(Soft::where('name', 'Lime Juice')->first());
        $bundle->alcohols()->save(Alcohol::where('name', 'Vodka')->first());
        $bundle->alcohols()->save(Alcohol::where('name', 'Curaçao')->first());
        $bundle->extras()->save(Extra::where('name', 'Limes')->first());

        $bundle = Bundle::create([
            'name' => 'Tequila Sunrise',
            'description' => 'This cocktail will bring summer in your glasses',
            'image' => 'tequila_sunrise.png',
            'price' => 30,
            'discount' => 0,
            'is_custom' => false
        ]);

        $bundle->softs()->save(Soft::where('name', 'Orange Juce')->first());
        $bundle->softs()->save(Soft::where('name', 'Grenadine')->first());
        $bundle->alcohols()->save(Alcohol::where('name', 'Tequila')->first());

        $bundle = Bundle::create([
            'name' => 'Mojito',
            'description' => 'The famous all loved cuban cocktail',
            'image' => 'mojito.png',
            'price' => 40,
            'discount' => 0,
            'is_custom' => false
        ]);

        $bundle->softs()->save(Soft::where('name', 'Perrier')->first());
        $bundle->softs()->save(Soft::where('name', 'Lime Juice')->first());
        $bundle->softs()->save(Soft::where('name', 'Sugar Syrup')->first());
        $bundle->alcohols()->save(Alcohol::where('name', 'Rhum')->first());
        $bundle->extras()->save(Extra::where('name', 'Limes')->first());
        $bundle->extras()->save(Extra::where('name', 'Sugar')->first());
        $bundle->extras()->save(Extra::where('name', 'Fresh Mint')->first());

        $bundle = Bundle::create([
            'name' => 'Cosmopolitan',
            'description' => 'Even if they don\'t admit men love cosmo too!',
            'image' => 'cosmopolitan.png',
            'price' => 38,
            'discount' => 0,
            'is_custom' => false
        ]);

        $bundle->softs()->save(Soft::where('name', 'Cranberries Juice')->first());
        $bundle->softs()->save(Soft::where('name', 'Lime Juice')->first());
        $bundle->alcohols()->save(Alcohol::where('name', 'Vodka')->first());
        $bundle->alcohols()->save(Alcohol::where('name', 'Triple Sec')->first());

        $bundle = Bundle::create([
            'name' => 'Pinacolada',
            'description' => 'The pineapple pizza of the cocktails',
            'image' => 'pinacolada.png',
            'price' => 38,
            'discount' => 0,
            'is_custom' => false
        ]);

        $bundle->softs()->save(Soft::where('name', 'Pineapple Juice')->first());
        $bundle->alcohols()->save(Alcohol::where('name', 'Rhum')->first());
        $bundle->alcohols()->save(Alcohol::where('name', 'Coconut cream')->first());
        $bundle->extras()->save(Extra::where('name', 'Cherry')->first());

        $bundle = Bundle::create([
            'name' => 'JägerBomb',
            'description' => 'To be able to dance from 8pm to 8am',
            'image' => 'jagerbomb.png',
            'price' => 35,
            'discount' => 0,
            'is_custom' => false
        ]);

        $bundle->softs()->save(Soft::where('name', 'Energy Drink')->first());
        $bundle->alcohols()->save(Alcohol::where('name', 'Jägermeister')->first());

    }
}
