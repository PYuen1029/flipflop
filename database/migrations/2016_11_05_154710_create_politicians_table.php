<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoliticiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('politicians', function (Blueprint $table) {
            $table->increments('id');
            $table->string('legal_name');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('flip_background')->default('default_red.png');
            $table->string('flop_background')->default('default_blue.png');
            $table->string('tags')->nullable();
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
        Schema::dropIfExists('politicians');
    }
}
