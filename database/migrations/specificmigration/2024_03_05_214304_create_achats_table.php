<?php

use App\Models\DemandeAchat;
use App\Models\Fournisseur;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('achats', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Fournisseur::class);
            $table->string('numero_bon_de_commande')->unique();
            $table->string('conditions_de_paiement')->nullable();
            $table->dateTime('delai_livraison_prevu')->nullable();
            $table->string('mode_livraison')->nullable();
            $table->dateTime('date_reception')->nullable();
            $table->string('numero_de_suivi')->nullable();
            $table->foreignIdFor(DemandeAchat::class)->nullable();
            $table->text('commentaires')->nullable();
            $table->string('statut')->default('rejected');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achats');
    }
};
