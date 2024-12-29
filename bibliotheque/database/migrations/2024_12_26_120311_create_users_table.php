<?php

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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // ID auto-incrémenté
            $table->string('username'); // Colonne pour le nom d'utilisateur
            $table->string('email')->unique(); // Colonne pour l'email (unique)
            $table->string('full_name'); // Colonne pour le nom complet
            $table->string('status'); // Colonne pour le statut (enseignant ou étudiant)
            $table->string('phone'); // Colonne pour le numéro de téléphone
            $table->string('password'); // Colonne pour le mot de passe
            $table->timestamps(); // Colonnes created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
