<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   $status = $this->faker->randomElement(['B','P','V']);
        return [
            'customer_id' =>  Customer::factory(),
            'amount' => $this->faker->numberBetween(10,2000),
            'status' => $status,
            'created_on' => $this->faker->dateTimeThisDecade() ,
            'paid_on' => $status == 'P' ? $this->faker->dateTimeThisDecade() : Null,
        ];
    }
}
