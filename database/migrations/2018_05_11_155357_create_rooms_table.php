<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numri');
            $table->integer('kati');
            $table->string('lloji');
            $table->string('hapsira');
            $table->string('Passport_Id');
            $table->longText('pershkrimi');
            $table->integer('cmimi');
            $table->boolean('prenotuar');
            $table->date('from_date');
            $table->date('till_date');
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
        Schema::dropIfExists('rooms');
    }
}
