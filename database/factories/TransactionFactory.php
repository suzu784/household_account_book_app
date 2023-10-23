<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\TransactionCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::all()->random();
        $randomTransactionCategory = TransactionCategory::all()->random();
        
        return [
            'user_id' => $user->id,
            'transaction_category_id' => $randomTransactionCategory->id,
            'amount' => $this->faker->numberBetween(100, 100000),
            'date' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'description' => $this->faker->text(40),
        ];
    }
}
