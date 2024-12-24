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
        Schema::create('cartes', function (Blueprint $table) {
            $table->id();
           $table->string("nom");
           $table->string("prenom");
           $table->string("date_naiss");
           $table->string("lieu_naiss")->nullable();
           $table->string("date_delivrance")->nullable();
           $table->string("date_expiration")->nullable();
           $table->string("sexe")->nullable();
           $table->string("nin")->nullable();
           $table->string("numero")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cartes');
    }
};
