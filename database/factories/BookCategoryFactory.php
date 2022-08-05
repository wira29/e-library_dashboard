<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_category' => $this->faker->unique(true)->numberBetween(1, 15)
        ];
    }
}
