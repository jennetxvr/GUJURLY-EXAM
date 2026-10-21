<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class OrderFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->firstName(),
            'surname' => fake()->lastName(),
            'table_no' => fake()->numberBetween(1, 20),
            'order' => fake()->randomElement([
               'Margarita Pizza',
               'Pepperoni Pizza',
               'Quattro Formaggi Pizza',
               'Capricciosa Pizza',
               'Prosciutto e Funghi Pizza',
               'Marinara Pizza',
               'Vegetariana Pizza',
               'BBQ Chicken Pizza',
               'Calzone Formaggi Pizza',

            ]),
        ];
    }
}
