<?php

namespace Database\Seeders;

use App\Models\habilitation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class habilitationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        habilitation::factory(10)->create();
    }
}
