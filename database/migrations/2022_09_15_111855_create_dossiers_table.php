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
        Schema::create('dossiers', function (Blueprint $table) {
            $table->id();
            $table->string("situation")->nullable();
            $table->foreignId("typebornages_id")
            /* ->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict') */;
            $table->foreignId("personne_physique_id");
            $table->foreignId("personne_morale_id");
            $table->date("date_enregistrement");
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
        Schema::dropIfExists('dossiers');
    }
};
