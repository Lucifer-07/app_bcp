<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->id();
            $table->string('type_demande');
            $table->date('date_atterissage');
            $table->string('demandeur');
            $table->string('description');
            $table->string('duree');
            $table->string('nombre_intervenat');
            $table->string('nombre_intervenat_externe');
            $table->string('dependance_entite_voisine');
            $table->unsignedBigInteger('entite_id');
 
    $table->foreign('entite_id')->references('id')->on('entites');


    $table->unsignedBigInteger('user_id');
 
    $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('demandes');
    }
}
