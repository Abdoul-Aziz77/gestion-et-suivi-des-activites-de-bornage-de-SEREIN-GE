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
        Schema::create('parcelles', function (Blueprint $table) {
            $table->id();
            $table->foreignId("personne_morale_id")->nullable()
            /* ->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict') */;
            $table->foreignId("personne_physique_id")->nullable()
            /* ->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict') */;
            $table->integer("dossier_id")->nullable();
            $table->integer("numparcelle")->nullable();
            $table->integer("lot")->nullable();
            $table->char("section")->nullable();
            $table->float("superficie")->nullable();
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
        Schema::dropIfExists('parcelles');
    }
};
