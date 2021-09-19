<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShareVariablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('share_variables', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idea');
            $table->bigInteger('finance');
            $table->bigInteger('experience');
            $table->bigInteger('risk');
            $table->bigInteger('technology');
            $table->bigInteger('investment');
            $table->bigInteger('management');
            $table->bigInteger('sale');
            $table->bigInteger('full_time');
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
        Schema::dropIfExists('share_variables');
    }
}
