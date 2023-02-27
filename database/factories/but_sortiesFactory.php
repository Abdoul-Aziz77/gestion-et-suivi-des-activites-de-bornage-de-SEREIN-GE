<?php

namespace Database\Factories;

use App\Models\but;
use App\Models\But_sortie;
use App\Models\But_sorties;
use App\Models\Sortie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class but_sortiesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = But_sorties::class;
    public function definition()
    {
        return [
            //
            "libelle"=>$this->faker->title(),
            "statut"=>$this->faker->boolean(),
            "but_id"=>but::inRandomorder()->first()->id,
            "sorties_id"=>Sortie::inRandomorder()->first()->id,
        ];
    }
}
