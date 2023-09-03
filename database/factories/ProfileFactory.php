<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
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
            'photo' => 'profiles/'.$this->faker->image('public/storage/profiles', 640, 400, null, false),
            'profession' => $this->faker->realText(60),
            'about' => $this->faker->realText(255),
            'twitter' => $this->faker->userName(),
            'linkedin' => $this->faker->userName(),
            'facebook' => $this->faker->userName(),
            'user_id' => User::all()->random()->id,
        ];
    }
}
