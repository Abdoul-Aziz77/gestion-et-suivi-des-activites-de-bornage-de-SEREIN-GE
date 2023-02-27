<?php

namespace Database\Factories;

use App\Models\Personne_morale;
use App\Models\Personne_physique;
use App\Models\Profil;
use App\Models\Utilisateur;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\utilisateur>
 */
class utilisateurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Utilisateur::class;
    
    public function definition()
    {
        return [
            //
            "nom_utilisateur"=>$this->faker->userName(),
            "mot_de_passe"=>$this->faker->password(8,30),
            "personne_physique_id"=>Personne_physique::inRandomorder()->first()->id,
            "personne_morale_id"=>Personne_morale::inRandomorder()->first()->id,
            "profil_id"=>Profil::inRandomorder()->first()->id,
        ];
    }
}
