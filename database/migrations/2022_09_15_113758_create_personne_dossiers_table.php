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
        Schema::create('personne_dossiers', function (Blueprint $table) {
            $table->id();
            $table->foreignId("role_personne_id")
            /* ->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict') */; // le role qu'une personne peut jouer sur le dosiser
            $table->foreignId("personne_physique_id")
            /* ->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict') */;
            $table->foreignId("dossier_id")
            /* ->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict') */;
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
        Schema::dropIfExists('personne_dossiers');
    }
};
