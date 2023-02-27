<?php

namespace Database\Factories;

use App\Models\Commentaire_dossier;
use App\Models\Dossier;
use App\Models\Utilisateur;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\commentaire_dossier>
 */
class commentaire_dossierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Commentaire_dossier::class;

    public function definition()
    {
        return [
            //
            "contenu"=>$this->faker->text(),
            "date_enregistrement"=>$this->faker->date(),
            "utilisateur_id"=>Utilisateur::inRandomorder()->first()->id,
            "dossier_id"=>Dossier::inRandomorder()->first()->id,
        ];
    }
}
