<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Seeder;

class IngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ingredient::create([
            'id' => '1',
            'ingredient' => 'tomaatensaus',
            'price'=> 1.00,
        ]);
        Ingredient::create([
            'id' => '2',
            'ingredient' => 'kaas',
            'price'=> 1.00,
        ]);
        Ingredient::create([
            'id' => '3',
            'ingredient' => 'rode uien',
            'price'=> 0.50,
        ]);
        Ingredient::create([
            'id' => '4',
            'ingredient' => 'paprika',
            'price'=> 0.50,
        ]);
        Ingredient::create([
            'id' => '5',
            'ingredient' => 'champigons',
            'price'=> 0.75,
        ]);
        Ingredient::create([
            'id' => '6',
            'ingredient' => 'kipfilet',
            'price'=> 1.00,
        ]);
        Ingredient::create([
            'id' => '7',
            'ingredient' => 'gehakt',
            'price'=> 1.50,
        ]);
    }
}
