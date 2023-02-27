<?php

namespace Database\Factories;

use App\Models\Adresse;
use App\Models\Personne_morale;
use App\Models\Personne_physique;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\personne_morale>
 */
class personne_moraleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Personne_morale::class;

    public function definition()
    {
        return [
            //
            "numero_recipicer"=>$this->faker->numerify(),
            'email' => fake()->unique()->safeEmail(),
            "tel_personne"=>$this->faker->phoneNumber(),
            "adresse_id"=>Adresse::inRandomorder()->first()->id,
            "personne_physique_id"=>Personne_physique::inRandomorder()->first()->id,
        ];
    }
}
