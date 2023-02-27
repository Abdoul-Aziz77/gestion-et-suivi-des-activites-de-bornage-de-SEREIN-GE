<?php

namespace Database\Factories;

use App\Models\type_bornage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\type_bornage>
 */
class typebornageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = typebornage::class;

    public function definition()

    {
        return [
            //
            "libelle"=>$this->faker->title(),
            "description"=>$this->faker->text(),
        ];
    }
}
