<?php

namespace Database\Seeders;

use App\Models\Parcelle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class parcelleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Parcelle::factory(10)->create();
    }
}
