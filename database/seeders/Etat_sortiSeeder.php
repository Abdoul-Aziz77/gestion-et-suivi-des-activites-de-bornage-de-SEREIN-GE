<?php

namespace Database\Seeders;

use App\Models\Etat_sorti;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Etat_sortiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Etat_sorti::factory(10)->create();
    }
}
