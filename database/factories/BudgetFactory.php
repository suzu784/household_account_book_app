<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\TransactionCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Budget>
 */
class BudgetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::find(1000);
        $randomTransactionCategory = TransactionCategory::all()->random();
        return [
            'user_id' => $user->id,
            'transaction_category_id' => $randomTransactionCategory->id,
            'amount' => function(array $attributes) {
                switch ($attributes['period']) {
                    case 'yearly':
                        return rand(100000, 1000000);
                    case 'monthly':
                        return rand(10000, 100000);
                    case 'weekly':
                        return rand(1000, 10000);
                    case 'daily':
                        return rand(100, 1000);
                }
            },
            'period' => ['yearly', 'monthly', 'weekly', 'daily'][rand(0, 3)],
        ];
    }
}
