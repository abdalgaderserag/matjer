<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'value' => rand(100,10000),
            'category'=> rand(0,6),
            'count' => rand(0,8),
            'curr_type' => rand(0,1),
            'details' => $this->faker->paragraph,
            'images' => '/images/item.png',
        ];
    }
}
