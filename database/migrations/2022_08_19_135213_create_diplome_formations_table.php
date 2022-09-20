<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiplomeFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diplome_formations', function (Blueprint $table) {
            $table->id();
            $table->string("diplome_formation");
            $table->date("date_debut_diplome_formation");
            $table->date("date_fin_diplome_formation");
            $table->string("organisme");
            $table->string("ville");
            $table->string("pays");
            $table->boolean("diplome");
            $table->boolean("formation");
            $table->string("statut")->nullable()->default(null);
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
        Schema::dropIfExists('diplome_formations');
    }
}
