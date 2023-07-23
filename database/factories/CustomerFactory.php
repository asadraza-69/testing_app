<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   $type = $this->faker->randomElement(['I', 'B']);
        $name = $type == 'I'? $this->faker->name() : $this->faker->company();
        
        return [
            'user_id' => User::factory(),
            'type' => $type,
            'address' => $this->faker->streetAddress()
        ];
    }
}
