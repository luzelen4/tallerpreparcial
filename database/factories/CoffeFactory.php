<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coffe>
 */
class CoffeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
{
    return [
        'name' => $this->faker->word,
        'description' => $this->faker->sentence,
        'price' => $this->faker->randomFloat(2, 1, 100),
        'size' => $this->faker->randomElement(['small', 'medium', 'large']),
        'available' => $this->faker->boolean,
        'roast_date' => $this->faker->date,
        'brew_time' => $this->faker->time,
        'caffeine_content' => $this->faker->randomFloat(2, 50, 400),
        'category_id' =>  $this->faker->randomElement([1, 2, 3, 4]),
        'brand_id'  =>  $this->faker->randomElement([1, 2, 3, 4])
    ];
}
}
