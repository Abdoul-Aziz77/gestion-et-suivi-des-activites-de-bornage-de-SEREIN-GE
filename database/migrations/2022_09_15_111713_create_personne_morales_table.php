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
        Schema::create('personne_morales', function (Blueprint $table) {
            $table->id();
            $table->integer("personne_physique_id");
            $table->string("adresse_id");
            $table->string("numero_recipicer");
            $table->string("email")->unique()->nullable();
            $table->char("tel_personne")->nullable();
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
        Schema::dropIfExists('personne_morales');
    }
};
