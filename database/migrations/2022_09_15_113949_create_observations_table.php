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
        Schema::create('observations', function (Blueprint $table) {
            $table->id();
            $table->foreignId("dossier_id")
            /* ->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict') */;
            $table->foreignId("personnel_id")
            /* ->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict') */;
            $table->text("contenu");
            $table->date("date_observation");
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
        Schema::dropIfExists('observations');
    }
};
