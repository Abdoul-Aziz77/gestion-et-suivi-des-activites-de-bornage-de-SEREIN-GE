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
        Schema::create('sorties', function (Blueprint $table) {
            $table->id();
            $table->foreignId("dossier_id")
            /* ->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict') */;
            $table->foreignId("etat_sortis_id");
            $table->text("materiel_utiliser")->nullable();
            $table->date("date_debut_sortie")->nullable();
            $table->string("equipe_sorti")->nullable();
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
        Schema::dropIfExists('sorties');
    }
};
