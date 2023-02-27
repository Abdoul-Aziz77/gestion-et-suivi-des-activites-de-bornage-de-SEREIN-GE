<?php

namespace Database\Factories;

use App\Models\Dossier;
use App\Models\fichier;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\fichier>
 */
class fichierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = fichier::class;

    public function definition()
    {
        return [
            //
            "nom"=>$this->faker->title(),
            "fichier"=>$this->faker->title(),
            "date_enregistrement"=>$this->faker->date(),
            "dossier_id"=>Dossier::inRandomorder()->first()->id,
        ];
    }
}
