<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pessoa>
 */
class PessoaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'PesNome' => fake()->name(), 
            'PesCPF' => fake()->numberBetween(100,999).".". fake()->numberBetween(100,999).".".fake()->numberBetween(100,999)."-".fake()->numberBetween(10,99), 
            'PesPhone' => fake()->phoneNumber(), 
            'PesCEP' => fake()->numberBetween(10000,99999)."-".fake()->numberBetween(100,999), 
            'PesEndereco' => fake()->address(), 
            'PesComumID' => fake()->numberBetween(1,9)
        ];
    }
}
