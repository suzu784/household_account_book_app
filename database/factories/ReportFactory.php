<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\ReportCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Report>
 */
class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::all()->random();
        $randomReportCategory = ReportCategory::all()->random();

        return [
            'user_id' => $user->id,
            'report_category_id' => $randomReportCategory->id,
            'content' => $this->faker->text(40),
            'is_read' => $this->faker->boolean(),
        ];
    }
}
