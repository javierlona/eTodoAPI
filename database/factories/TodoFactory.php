<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'userId' => $this->faker->numberBetween(888, 899),
            'title' => $this->faker->text(25),
            'completed' => $this->faker->boolean(),
        ];
    }
}
