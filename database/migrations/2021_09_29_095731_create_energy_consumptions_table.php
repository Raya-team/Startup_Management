<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnergyConsumptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('energy_consumptions', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->string('unit');
            $table->Integer('annual_consumption');
            $table->Integer('unit_cost');
            $table->bigInteger('annual_cost');
            $table->tinyInteger('year');
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
        Schema::dropIfExists('energy_consumptions');
    }
}
