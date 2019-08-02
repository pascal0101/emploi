<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecruteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruteurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NomEnt');
            $table->string('Adresse');
            $table->string('Ville');
            $table->string('Site');
            $table->string('Logo');
            $table->string('Secteur');
            $table->text('Description');
            $table->string('NomProp');
            $table->string('PrenomProp');
            $table->Integer('Tel')->unsigned();
            $table->string('email');
            $table->string('Lieu');
            $table->string('MotPasse');
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
        Schema::dropIfExists('recruteurs');
    }
}
