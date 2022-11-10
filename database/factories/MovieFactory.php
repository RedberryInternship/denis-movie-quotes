<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array
	{
		return [
			'title'       => [
				'en' => $this->faker->sentence,
				'ka' => 'თარგმანი',
			],
			'slug'        => $this->faker->slug,
			'user_id'     => User::factory(),
		];
	}
}
