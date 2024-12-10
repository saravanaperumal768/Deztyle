<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;
use App\Models\State;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' => $this->faker->numberBetween(1, Customer::count()),
            'line_1' => $this->faker->streetAddress,
            'line_2' => $this->faker->streetName,
            'city' => $this->faker->city,
            'state_id' => $this->faker->numberBetween(1, State::count()),
            'postal_code' => $this->faker->numerify('######'),
        ];
    }
}
