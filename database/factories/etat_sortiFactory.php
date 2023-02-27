<?php

namespace Database\Factories;

use App\Models\Etat_sorti;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\etat_sorti>
 */
class etat_sortiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Etat_sorti::class;

    public function definition()
    {
        return [
            //

            "etat"=>$this->faker->title(),
            "detaille"=>$this->faker->text(),
        ];
    }
}
