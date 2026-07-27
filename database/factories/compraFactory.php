<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class compraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        $compra = [
            'arroz',
            'feijao', 
            'refri', 
            'acucar', 
            'sabao',
        ];
        return [
            'user_id' => 1,
            'name' => $this->faker->randomElement($compra),
            'number' => $this->faker->randomNumberBetween(1,9)
        ];
    }
}
