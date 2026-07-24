<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\compra;
/**
 * @extends Factory<Model>
 */
class compralogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'compra_id' => compra::query()->inRandomOrder()->first()->id,
            'completed_at' => $this->faker->dateTimeBetween('-6 days', 'now'),
        ];
    }
}
