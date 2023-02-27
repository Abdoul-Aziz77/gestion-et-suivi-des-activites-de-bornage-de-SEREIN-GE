<?php

namespace Database\Factories;

use App\Models\habilitation;
use App\Models\Profil;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\profil>
 */
class profilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Profil::class;

    public function definition()
    {
        return [
            //

            "libelle"=>$this->faker->title(),
            "description"=>$this->faker->text(),
            "habilitation_id"=>habilitation::inRandomorder()->first()->id,
        ];
    }
}
