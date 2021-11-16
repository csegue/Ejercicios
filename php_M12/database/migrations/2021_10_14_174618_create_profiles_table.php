<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('federation_id')->unsigned();
            $table->string('ambito');
            $table->string('presidente');
            $table->string('fundacion');
            $table->timestamps();

            $table->foreign('federation_id')->references('id')->on('federations')
            ->onDelete('cascade')    //si eliminamos una federacion tambien se elimina su perfil
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
        Schema::dropIfExists('profiles');
    }
}
