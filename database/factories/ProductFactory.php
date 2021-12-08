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
            'category_id' => $this->faker->numberBetween(1, 3),
            'name' => $this->faker->word(),
            'slug' => $this->faker->slug(2),
            'description' => $this->faker->paragraph(2),
            'price' => $this->faker->randomFloat(2, 8, 50)
        ];
    }
}
