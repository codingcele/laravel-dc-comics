<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'firstName' => fake() -> words(1, true),
            'lastName' => fake() -> words(1, true),
            'dateOfBirth' => fake() -> date(),
            'height' => fake() -> boolean()
                        ? fake() -> numberBetween(0, 260)
                        : null,
        ];
    }
}
