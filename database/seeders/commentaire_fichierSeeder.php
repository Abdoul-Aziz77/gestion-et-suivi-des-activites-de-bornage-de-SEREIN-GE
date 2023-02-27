<?php

namespace Database\Seeders;

use App\Models\Commentaire_fichier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class commentaire_fichierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Commentaire_fichier::factory(10)->create();
    }
}
