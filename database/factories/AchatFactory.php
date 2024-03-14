<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Achat>
 */
class AchatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fournisseur_id' => \App\Models\Fournisseur::factory()->create()->id,
            'numero_bon_de_commande' => $this ->faker->unique()->numerify('BON####'),
            'conditions_de_paiement' => $this ->faker->sentence,
            'delai_livraison_prevu' => $this ->faker->dateTimeBetween('+1 week', '+3 months'),
            'mode_livraison' => $this ->faker->randomElement(['Standard', 'Express']),
            'date_reception' =>$this ->faker->optional()->dateTimeThisMonth(),
            'numero_de_suivi' => $this ->faker->optional()->numerify('SUIVI#####'),
            'commentaires' =>$this ->faker->optional()->paragraph,
            'statut' => $this ->faker->randomElement([ 'approved', 'rejected']),
            //
        ];
    }
}
