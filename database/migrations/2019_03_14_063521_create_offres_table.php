<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->increments('id');
            $table->String('Email');
            $table->String('Titre');
            $table->String('Lieu');
            $table->String('Type');
            $table->String('Categorie');
            $table->String('Description');
            $table->DateTime('DateFin');
            $table->String('Entreprise');
            $table->String('Site');
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
        Schema::dropIfExists('offres');
    }
}
