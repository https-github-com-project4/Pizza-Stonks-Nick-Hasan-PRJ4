<?php

namespace Database\Seeders;


use App\Models\Size;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Size::create([
            'id' => '1',
            'size' => '25',
            'price' => '100',


        ]);
    }
}
