<?php

namespace Database\Factories;

use App\Models\Bank;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::find(1000);
        $randomBanks = Bank::all()->random(1);
        return [
            'user_id' => $user->id,
            'bank_id' => $randomBanks[0]->id,
            'balance' => $this->faker->numberBetween(1000, 1000000),
        ];
    }
}
