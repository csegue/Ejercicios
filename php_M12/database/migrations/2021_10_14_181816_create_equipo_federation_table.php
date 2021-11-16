<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipoFederationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipo_federation', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('equipo_id')->unsigned();
            $table->bigInteger('federation_id')->unsigned();

            $table->foreign('equipo_id')->references('id')->on('equipos')
                            ->onDelete('cascade')    //si eliminamos un usuario tambien se elimina su perfil
                            ->onUpdate('cascade');
            
            $table->foreign('federation_id')->references('id')->on('federations')
                            ->onDelete('cascade')    //si eliminamos un usuario tambien se elimina su perfil
                            ->onUpdate('cascade');   
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipo_federation');
    }
}
