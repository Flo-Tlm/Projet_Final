<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSondageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sondage', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question');
            $table->string('choix1')->nullable();
            $table->string('choix2')->nullable();
            $table->string('choix3')->nullable();
            $table->string('choix4')->nullable();
            $table->string('choix5')->nullable();
            $table->string('choix6')->nullable();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sondage');
    }
}
