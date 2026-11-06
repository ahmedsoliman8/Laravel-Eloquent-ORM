<?php

namespace Database\Factories;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends Factory<Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'bio' => fake()->text(),

        ];
    }

    public function configure(): static
    {
        return $this->afterMaking(function (Profile $profile) {
            if ($profile->user) {
                $profile->bio = "Profile for {$profile->user->name}";
            }

        });
    }
}
