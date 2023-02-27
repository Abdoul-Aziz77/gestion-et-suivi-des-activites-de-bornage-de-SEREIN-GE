<?php

namespace Database\Factories;

use App\Models\Adresse;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\adresse>
 */
class adresseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Adresse::class;

    public function definition()
    {
        return [
            //
            "pays"=>$this->faker->country(),
            "ville"=>$this->faker->city(),
            "code_postale"=>$this->faker->postcode(),
            "quartier"=>$this->faker->title(),
            "secteur"=>$this->faker->numberBetween(1,30),
        ];
    }
}
