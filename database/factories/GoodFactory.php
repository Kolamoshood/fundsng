<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(1),
            'label' => $this->faker->sentence(1),
            'company' => $this->faker->company(),
            'email' => $this->faker->companyEmail(),
            'location' => $this->faker->city(),
            'website' => $this->faker->url(),
            'description' => $this->faker->paragraph(30)
        ];
    }
}
