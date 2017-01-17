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
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
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
