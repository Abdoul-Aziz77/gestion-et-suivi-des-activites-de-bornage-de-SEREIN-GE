<?php

namespace Database\Factories;

use App\Models\Adresse;
use App\Models\Personne_physique;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\personne_physique>
 */
class personne_physiqueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Personne_physique::class;

    public function definition()
    {
        return [
            //
            "nom"=>$this->faker->firstName(),
            "prenom"=>$this->faker->lastName(),
            "email" => fake()->unique()->safeEmail(),
            "tel_personne"=>$this->faker->phoneNumber(),
            "adresse_id"=>Adresse::inRandomorder()->first()->id,
        ];
    }
}
