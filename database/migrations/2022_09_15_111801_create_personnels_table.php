<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnels', function (Blueprint $table) {
            $table->id();
            $table->integer("matricule");
            $table->foreignId("poste_id")
            /* ->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict') */;
            $table->foreignId("personne_physique_id")
            /* ->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict') */;
            $table->date("date_debut_contrat");
            $table->integer("dure_contrat"); // la durée du contrat
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnels');
    }
};
