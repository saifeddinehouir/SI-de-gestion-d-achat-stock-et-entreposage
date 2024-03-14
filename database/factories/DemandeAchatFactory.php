<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DemandeAchat>
 */
class DemandeAchatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'numero' => $this->faker->unique()->numerify('DA#####'), // Générer un numéro unique pour chaque demande d'achat
            'date_demande' => $this->faker->dateTime(), // Générer une date de demande aléatoire
            'description' => $this->faker->paragraph(), // Générer une description aléatoire
            'statut' => 'pending', // Définir le statut par défaut sur 'pending'
            //
        ];
    }
}
