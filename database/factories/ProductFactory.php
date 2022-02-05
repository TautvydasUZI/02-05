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
            'title' => $this->faker->firstName(),
            'description' => $this->faker->sentence(5),
            'price' => $this->faker->randomFloat(2,10,200),
            'image_url' => $this->faker->imageUrl(),
            'category_id' => rand(1,3)
        ];
    }
}
