<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Character>
 */
class CharacterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $char_names = config('char_names');
        $rand = array_rand($char_names);
        return [
            //
            'name' => $char_names[$rand],
            'strength' => $this->faker->numberBetween(8,18),
            'dexterity' => $this->faker->numberBetween(8,18),
            'constitution' => $this->faker->numberBetween(8,18),
            'intelligence' => $this->faker->numberBetween(8,18),
            'wisdom' => $this->faker->numberBetween(8,18),
            'charisma' => $this->faker->numberBetween(8,18),
            'level' => $this->faker->numberBetween(1,12),
        ];
    }
}
