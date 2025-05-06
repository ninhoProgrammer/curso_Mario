<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word(),
            'slug' => $this->faker->slug(),
            'descripcion' => $this->faker->sentence(),
            'categoria' => $this->faker->randomElement(['Desarollo web', 'desarrollo movil']) // Precio entre 100 y 1000
            
        ];
    }
}
