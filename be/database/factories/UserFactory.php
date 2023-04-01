<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{

    protected $model = \App\Models\User::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'account' => $this->faker->unique()->regexify('/^[A-Za-z0-9]{8,16}$/'),
            'email_verified_at' => now(),
            'password' => '$2a$12$gJvbN4gaHLBXhQXWDeoHM.uoLWcrkvEKHOUeXrgSziQVMCl62K4Ju', // 123123123
            'remember_token' => Str::random(10),
        ];
    }

    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
