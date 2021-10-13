<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsumerItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumer_items', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->integer('number');
            $table->Integer('unit_cost');
            $table->bigInteger('total_cost');
            $table->bigInteger('team_id')->unsigned();
            $table->tinyInteger('year');
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
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
        Schema::dropIfExists('consumer_items');
    }
}
