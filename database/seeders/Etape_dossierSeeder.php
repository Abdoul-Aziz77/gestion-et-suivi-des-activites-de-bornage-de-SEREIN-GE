<?php

namespace Database\Seeders;

use App\Models\Etape_dossier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Etape_dossierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Etape_dossier::factory(10)->create();
    }
}
