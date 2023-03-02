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
        Schema::create('fichiers', function (Blueprint $table) {
            $table->id();
            $table->foreignId("dossier_id")->nullable()
            /* ->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict') */;
            $table->foreignId("parcelle_id")->nullable()
            /* ->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict') */;
            $table->string("nom")->nullable();
            $table->string("fichier")->nullable(); // quel type pour les fichier world ou pdf
            $table->date("date_enregistrement")->nullable();
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
        Schema::dropIfExists('fichiers');
    }
};
