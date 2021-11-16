<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPensionIdAtReservas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reservas', function (Blueprint $table) {
            
            $table->foreignId('pension_id');
            
            /*
            $table->bigInteger('pension_id')->unsigned()->nullable()->after('id');

            $table->foreign('pension_id')->references('id')->on('pensiones')
            ->onDelete('set null') 
            ->onUpdate('set null');
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
