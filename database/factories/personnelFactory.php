<?php

namespace Database\Factories;

use App\Models\Personne_physique;
use App\Models\Personnel;
use App\Models\Poste;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\personnel>
 */
class personnelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Personnel::class;

    public function definition()
    {
        return [
            //
            "matricule"=>$this->faker->numberBetween(1,100),
            "personne_physique_id"=>Personne_physique::inRandomorder()->first()->id,
            "poste_id"=>Poste::inRandomorder()->first()->id,
            "date_debut_contrat"=>$this->faker->date(),
            "dure_contrat"=>$this->faker->numberBetween(1,1000000),


        ];
    }
}
