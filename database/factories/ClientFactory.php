<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => UserFactory::new()->create(),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'birthday' => $this->faker->date(),
            'gender' => 'Man',
            'panic_button' => 'Call',
            'relation' => 'Professional',
            'color' => 'Red',
            'photo' => 'https://www.gravatar.com/avatar/' . md5($this->faker->numberBetween(1000, 1000000)),
        ];
    }
}
