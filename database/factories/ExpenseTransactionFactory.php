<?php

namespace Database\Factories;

use App\Models\Payment;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ExpenseTransaction>
 */
class ExpenseTransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $randomTransaction = Transaction::all()->random();
        $randomPayment = Payment::all()->random();
        
        return [
            'transaction_id' => $randomTransaction->id,
            'payment_id' => $randomPayment->id,
            'store_name' => $this->faker->company(),
        ];
    }
}
