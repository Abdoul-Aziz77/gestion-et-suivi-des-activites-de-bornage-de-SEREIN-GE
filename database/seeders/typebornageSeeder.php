<?php

namespace Database\Seeders;

use App\Models\type_bornage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class type_bornageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        type_bornage::factory(10)->create();
    }
}
