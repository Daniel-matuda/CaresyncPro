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
            'firstName' => $this->faker->firstName(),
            'lastName' => $this->faker->lastName(),
            'email' => $this->faker->email(),
            'password' => bcrypt('123'),
            'sexo' => $this->faker->randomElement(['masculino', 'feminino']),
            
            'telefone' => $this->faker->numerify('(##) #####-####'),
            'nascimento' => $this->faker->dateTimeBetween('-65 years', '-20 years')->format('Y-m-d'),
            'endereco' => $this->faker->address,

            'especialidade' => $this->faker->word(),
            'cep' => $this->faker->postcode(),
            'cidade' => $this->faker->city(),
            'uf' => $this->faker->stateAbbr(),
            'nr_sus' => $this->faker->creditCardNumber(),
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
