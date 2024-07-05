<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Category::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'color' => $this->faker->hexColor,
            'created_by' => $this->faker->email,
            'updated_by' => $this->faker->email,
        ];
    }
}
