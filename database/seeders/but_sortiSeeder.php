<?php

namespace Database\Seeders;

use App\Models\but;
use App\Models\But_sortie;
use App\Models\But_sorties;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class but_sortiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        But_sorties::factory(10)->create();
    }
}
