<?php

namespace Database\Factories;

use App\Models\Role_personne;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\role_personne>
 */
class role_personneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Role_personne::class;
    
    public function definition()
    {
        return [
            //

            "libelle"=>$this->faker->title(),
            //"description"=>$this->faker->text(),
        ];
    }
}
