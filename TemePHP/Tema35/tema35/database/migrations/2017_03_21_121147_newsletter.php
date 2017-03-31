<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Newsletter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsletter', function(Blueprint $table) {

            $table->increments('id');
            $table->string('coloana1');
            $table->string('coloana2');
            $table->string('coloana3');
            $table->string('coloana4');
            $table->string('coloana5');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('newsletter');
    }
}
