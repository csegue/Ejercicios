<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBallIdAtFederations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('federations', function (Blueprint $table){
            $table->bigInteger('ball_id')->unsigned()->nullable()->after('id');

            $table->foreign('ball_id')->references('id')->on('balls')
                ->onDelete('set null')    //si se borra un ball no quiero que se borren las federaciones, se pondrá como nulo
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
        //
    }
}
