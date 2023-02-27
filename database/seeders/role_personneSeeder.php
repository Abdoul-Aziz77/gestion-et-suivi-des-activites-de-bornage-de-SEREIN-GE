<?php

namespace Database\Seeders;

use App\Models\Role_personne;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class role_personneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role_personne::factory(10)->create();
    }
}
