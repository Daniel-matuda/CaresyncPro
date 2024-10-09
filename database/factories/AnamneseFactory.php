<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Anamnese>
 */
class AnamneseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nome = $this->faker->name();

        return [
            'nome' => $nome,
            'local_do_atendimento' => $this->faker->city(),     
            'data' => $this->faker->date(),
            'cor' => $this->faker->word(),
            'estado_civil' => $this->faker->word(),
            'profissao' => $this->faker->jobTitle(),
            'nacionalidade' => 'Brasileiro',
            'naturalidade' => 'Brasileiro nascido no Brasil',
            'procedencia' => $this->faker->word(),
            'endereco' => $this->faker->address()
        ];
    }
}
