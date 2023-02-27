<?php

namespace Database\Factories;

use App\Models\Poste;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\poste>
 */
class posteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Poste::class;
     
    public function definition()
    {
        return [
            //

            "libelle"=>$this->faker->title(),
            "description"=>$this->faker->text(),
        ];
    }
}
