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
            $table->longText('flip');
            $table->longText('flop');
            $table->string('source_type')->default('text');
            $table->string('flip_source');
            $table->string('flop_source');
            $table->boolean('approved')->default(false);
            $table->timestamps();
            
            //  FOREIGN KEYS
            $table->integer('politician_id')->unsigned()->nullable();
            $table->foreign('politician_id')
              ->references('id')->on('politicians')
              ->onDelete('cascade');

            $table->engine = 'InnoDB';
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
