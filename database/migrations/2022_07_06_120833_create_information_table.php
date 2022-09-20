<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informations', function (Blueprint $table) {
            $table->id();
            $table->string('adresse',300);
            $table->string('mail',255);
            $table->string('tel',10);
            $table->string('nom',255);
            $table->string('prenom',255);
            $table->boolean('permis');
            $table->boolean('vehicule');
            $table->string('distance',255);
            $table->date('naissance');
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
        Schema::dropIfExists('informations');
    }
}
