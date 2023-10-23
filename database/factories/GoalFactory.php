<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Goal>
 */
class GoalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::find(1000);
        return [
            'user_id' => $user->id,
            'content' => $this->faker->text(40),
            'amount' => $this->faker->numberBetween(1000, 1000000),
            'deadline' => $this->faker->dateTimeBetween('now', '+1 year'),
            'is_achieved' => false,
        ];
    }
}
