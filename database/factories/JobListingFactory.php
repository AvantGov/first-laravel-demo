<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class JobListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'salary'=> "$" . str(fake()->numberBetween(35000,100000)) . " USD Per Year",
            'created_at'=> fake()->dateTime(),
            'updated_at'=> fake()->dateTime(),
            'employer_id' => Employer::factory()
        ];
    }
}
