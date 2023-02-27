<?php

namespace Database\Seeders;

use App\Models\Personne_physique;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class personne_physiqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Personne_physique::factory(10)->create();
    }
}
