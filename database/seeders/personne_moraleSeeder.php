<?php

namespace Database\Seeders;

use App\Models\Personne_morale;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class personne_moraleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Personne_morale::factory(10)->create();
    }
}
