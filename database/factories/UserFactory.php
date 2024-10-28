<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory

{
    // Specify the model that this factory is for
    protected $model = \App\Models\User::class;

    public function definition()
    {
        return [
            'firstName' => $this->faker->firstName,
            'lastName' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'password' => Hash::make('password'), // Default password for all users
            'birthDate' => $this->faker->date('Y-m-d', '2000-01-01'),
            'profilePicture' => null, // You can add logic to generate a fake image if needed
            'isSelfPay' => $this->faker->boolean(20), // 20% chance of being true
        ];
    }
}
