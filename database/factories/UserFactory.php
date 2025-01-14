<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @method \App\Models\User createOne($attributes = [])
 * @method \App\Models\User|\Illuminate\Database\Eloquent\Collection create($attributes = [], \Illuminate\Database\Eloquent\Model|null $parent = null)
 * @method \App\Models\User makeOne($attributes = [])
 * @method \App\Models\User|\Illuminate\Database\Eloquent\Collection make($attributes = [], \Illuminate\Database\Eloquent\Model|null $parent = null)
 * @method \App\Models\User newModel(array $attributes = [])
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
