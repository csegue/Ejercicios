<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservaServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva_servicio', function (Blueprint $table) {
            $table->bigInteger('reserva_id')->unsigned();
            $table->bigInteger('servicio_id')->unsigned();

            $table->timestamps();
            
            $table->foreign('reserva_id')->references('id')->on('reservas')
            ->onDelete('cascade')    //si eliminamos un usuario tambien se elimina su reserva
            ->onUpdate('cascade');
            
            $table->foreign('servicio_id')->references('id')->on('servicios')
            ->onDelete('cascade')    //si eliminamos un usuario tambien se elimina su reserva
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
        Schema::dropIfExists('reserva_servicio');
    }
}
