<?php

namespace Database\Seeders;

use App\Models\Commentaire_dossier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class commentaire_dossierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Commentaire_dossier::factory(10)->create();
    }
}
