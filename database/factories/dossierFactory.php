<?php

namespace Database\Factories;

use App\Models\Dossier;
use App\Models\typebornage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\dossier>
 */
class dossierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Dossier::class;

    public function definition()
    {
        return [
            //
            "libelle"=>$this->faker->title(),
            "date_enregistrement"=>$this->faker->date(),
            "typebornage_id"=>typebornage::inRandomorder()->first()->id,
        ];
    }
}
