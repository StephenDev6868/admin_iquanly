<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle(),
            'content' => $this->faker->paragraph(),
            'status' => rand(1,3),
            'user_id' => rand(1,20),
            'avatar'  => $this->faker->imageUrl(),
        ];
    }
}
