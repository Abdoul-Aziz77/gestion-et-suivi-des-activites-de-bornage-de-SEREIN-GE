<?php

namespace Database\Factories;

use App\Models\Dossier;
use App\Models\Parcelle;
use App\Models\Personne_morale;
use App\Models\Personne_physique;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\parcelle>
 */
class parcelleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Parcelle::class;

    public function definition()
    {
        return [
            //

            "lot"=>$this->faker->numberBetween(1,100),
            "section"=>$this->faker->title(),
            "superficie"=>$this->faker->numerify(),
            "dossier_id"=>Dossier::inRandomorder()->first()->id,
            "personne_physique_id"=>Personne_physique::inRandomorder()->first()->id,
            "personne_morale_id"=>Personne_morale::inRandomorder()->first()->id,


        ];
    }
}
