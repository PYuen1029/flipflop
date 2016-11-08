<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlipflopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flipflops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('summary');
            $table->string('flip');
            $table->string('flop');
            $table->string('source_type');
            $table->string('flip_source');
            $table->string('flop_source');
            $table->timestamps();
            
            //  FOREIGN KEYS
            $table->integer('politician_id')->unsigned();
            $table->foreign('politician_id')
              ->references('id')->on('politicians')
              ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flipflops');
    }
}
