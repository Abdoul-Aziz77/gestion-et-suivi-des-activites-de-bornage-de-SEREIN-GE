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
        Schema::create('personne_physiques', function (Blueprint $table) {
            $table->id();
            $table->foreignId("adresse_id")
            /* ->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict') */;

            $table->string("nom");
            $table->string("prenom");
            $table->string("email")->unique()->nullable();
            $table->string("tel_personne")->nullable();
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
        Schema::dropIfExists('personne_physiques');
    }
};
