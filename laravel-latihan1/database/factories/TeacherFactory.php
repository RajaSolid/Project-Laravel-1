<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Subject;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'  => $this->faker->name(),
            'phone' => $this->faker->phoneNumber(),
            'subject_id' => Subject::factory(),
            'email' => $this->faker->unique()->safeEmail(),
            'address' => $this->faker->address(),

            
            // $table->string('name');
            // $table->integer('subject_id');
            // $table->string('phone')->nullable();
            // $table->string('email')->unique();
            // $table->string('address');
        ];
    }
}
