<?php

namespace Database\Factories;

use App\Models\Etape;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\etape>
 */
class etapeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Etape::class;
     
    public function definition()
    {
        return [
            //

            "libelle"=>$this->faker->title(),
            "description"=>$this->faker->text(),
        ];
    }
}
