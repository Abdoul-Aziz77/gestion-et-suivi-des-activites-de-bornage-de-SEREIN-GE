<?php

namespace Database\Factories;

use App\Models\Dossier;
use App\Models\Observation;
use App\Models\Personnel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\observation>
 */
class observationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Observation::class;

    public function definition()
    {
        return [
            //
            "personnel_id"=>Personnel::inRandomorder()->first()->id,
            "contenu"=>$this->faker->text(),
            "date_observation"=>$this->faker->date(),
            "dossier_id"=>Dossier::inRandomorder()->first()->id,
        ];
    }
}
