<?php

namespace Database\Factories;

use App\Models\Dossier;
use App\Models\Personne_dossier;
use App\Models\Personne_physique;
use App\Models\Role_personne;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\personne_dossier>
 */
class personne_dossierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Personne_dossier::class;

    public function definition()
    {
        return [
            //
            "dossier_id"=>Dossier::inRandomorder()->first()->id,
            "personne_physique_id"=>Personne_physique::inRandomorder()->first()->id,
            "role_personne_id"=>Role_personne::inRandomorder()->first()->id,
        ];
    }
}
