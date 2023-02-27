<?php

namespace Database\Seeders;

use App\Models\Personne_dossier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class personne_dossierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Personne_dossier::factory(10)->create();
    }
}
