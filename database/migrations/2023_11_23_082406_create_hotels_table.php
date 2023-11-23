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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('Nom_de_lHotel');
            $table->string('description_de_lHotel');
            $table->string('nom_de_la_chambre');
            $table->string('prix');
            $table->string('Nombre_de_lits');
            $table->string('max_dadultes');
            $table->string('Enfants_maximum_autorisé');
            $table->string('Attributs');
            $table->string('Status');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
