<?php

namespace Database\Factories;

use App\Models\Commentaire_fichier;
use App\Models\fichier;
use App\Models\Utilisateur;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\commentaire_fichier>
 */
class commentaire_fichierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Commentaire_fichier::class;

    public function definition()
    {
        return [
            //
            "contenu"=>$this->faker->text(),
            "date_enregistrement"=>$this->faker->date(),
            "utilisateur_id"=>Utilisateur::inRandomorder()->first()->id,
            "fichier_id"=>fichier::inRandomorder()->first()->id,
        ];
    }
}
