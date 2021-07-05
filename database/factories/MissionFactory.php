<?php

namespace Database\Factories;

use App\Models\Mission;
use App\Models\Organisation;
use Illuminate\Database\Eloquent\Factories\Factory;

class MissionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mission::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'reference' => $this->faker->text(),
            'organisation_id' => $this->faker->randomElement(Organisation::pluck('id')),
            'title' => $this->faker->text(),
            'comment' => null,
            'deposit' => $this->faker->randomNumber($nbDigits = 2),
            'ended_at' => $this->faker->date()
        ];
    }
}
