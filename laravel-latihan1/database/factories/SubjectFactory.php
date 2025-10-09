<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

        'name' => $this->faker->unique()->randomElement(['B.indo', 'B.Inggris', 'Matematika', 'B.Jepang', 'IPS']),
        'description' => $this->faker->randomElement(['Lorem', 'Ipsum', 'Dol', 'Amet', 'Si'])

            
            // $table->string('name');
            // $table->string('description');
        ];
    }
}
