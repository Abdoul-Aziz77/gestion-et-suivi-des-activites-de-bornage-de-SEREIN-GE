<?php

namespace Database\Factories;

use App\Models\Dossier;
use App\Models\Etape;
use App\Models\Etape_dossier;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\etape_dossier>
 */
class etape_dossierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Etape_dossier::class;

    public function definition()
    {
        return [
            //

            "date_realisation"=>$this->faker->date(),
            "statut"=>$this->faker->boolean(),
            "etapes_id"=>Etape::inRandomorder()->first()->id,
            "dossier_id"=>Dossier::inRandomorder()->first()->id,
        ];
    }
}
