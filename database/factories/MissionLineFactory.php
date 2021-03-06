<?php

namespace Database\Factories;

use App\Models\MissionLine;
use App\Models\Mission;
use Illuminate\Database\Eloquent\Factories\Factory;

class MissionLineFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MissionLine::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'mission_id' => $this->faker->randomElement(Mission::pluck('id')),
            'title' => $this->faker->text(),
            'quantity' => $this->faker->randomNumber($nbDigits = 2),
            'price' => $this->faker->randomNumber($nbDigits = 2),
            'unity' => $this->faker->randomElement(['jour', 'semaine', 'mois'])
        ];
    }
}
