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
        Schema::create('mesures', function (Blueprint $table) {
            $table->id();
            $table->Integer('epaule');
            $table->Integer('Tête');
            $table->Integer('Cou');
            $table->Integer('Poitrine—tour');
            $table->Integer('Dessous_poitrine');
            $table->Integer('Tour_taille_naturelle');
            $table->Integer('Cuisse_circonférece');
            $table->Integer('Hanches—tour');
            $table->Integer('Cuisse—circonférence');
            $table->Integer('Genou—ciconférence');
            $table->Integer('Mollet—circonférence');
            $table->Integer('Cheville_circonférence');
            $table->Integer('Biceps—circonférence');
            $table->Integer('Coude—ciconférence');
            $table->Integer('Avant_bras_circonférence');
            $table->Integer('Poignet_circonférence');
            $table->Integer('Poignet-code');
            $table->Integer('Hauteur_total');
            $table->Integer('Longueur_corps');
            $table->Integer('Longueur_dos');
            $table->Integer('Tête—circonférence');
            $table->Integer('Cou—circonférence');
            $table->Integer('Épaule—longueur' );
            $table->Integer('Longueur-bras');
            $table->Integer('Tour_taille');
            $table->Integer('Hanches');
            $table->Integer('Cuisse');
            $table->Integer('Genou');
            $table->Integer('Mollet');
            $table->Integer('Cheville');
            $table->Integer('Biceps');
            $table->Integer('Coude');
            $table->Integer('Avant-bras');
            $table->Integer('Poignet—circonférence');
            $table->Integer('Poignet-code—distance');
            $table->Integer('Entre-jambe—longueur');
            $table->Integer('Genou-cheville');
            $table->unsignedBigInteger('clients_id')->unsigned();
            $table->foreign('clients_id')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('modeles_id')->unsigned();
            $table->foreign('modeles_id')->references('id')->on('modeles')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mesures');
    }
};
