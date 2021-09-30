<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportationCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transportation_costs', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->integer('number');
            $table->Integer('unit_cost');
            $table->bigInteger('total_cost');
            $table->bigInteger('team_id')->unsigned();
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
        Schema::dropIfExists('transportation_costs');
    }
}
