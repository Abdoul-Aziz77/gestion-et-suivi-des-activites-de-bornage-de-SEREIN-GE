<?php

namespace Database\Factories;

use App\Models\Dossier;
use App\Models\Etat_sorti;
use App\Models\Sortie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\sortie>
 */
class sortieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
protected $model = Sortie::class;

    public function definition()
    {
        return [
            //
            "materiel_utiliser"=>$this->faker->text(),
            "date_debut_sortie"=>$this->faker->date(),
            "equipe_sorti"=>$this->faker->name(),
            "dossier_id"=>Dossier::inRandomorder()->first()->id,
            "etat_sortis_id"=>Etat_sorti::inRandomorder()->first()->id,


        ];
    }
}
