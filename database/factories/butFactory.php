<?php

namespace Database\Factories;

use App\Models\but;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\but>
 */
class butFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = but::class;
     
    public function definition()
    {
        return [
            //

            "libelle"=>$this->faker->title(),
            "description"=>$this->faker->text(),
        ];
    }
}
