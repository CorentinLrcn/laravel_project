<?php

namespace Database\Factories;

use App\Models\Contribution;
use App\Models\Organisation;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContributionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contribution::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'price' => $this->faker->randomNumber($nbDigits = 2),
            'title' => $this->faker->text(),
            'comment' => null,
            'organisation_id' => $this->faker->randomElement(Organisation::pluck('id')),
            'updated_at' => null
        ];
    }
}
