<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
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
