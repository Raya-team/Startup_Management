<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValuationPreOperationCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valuation_pre_operation_costs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('description')->unsigned();
            $table->foreign('description')->references('id')->on('pre_operating_costs')->onDelete('cascade');
            $table->bigInteger('owner')->unsigned();
            $table->foreign('owner')->references('id')->on('team_members')->onDelete('cascade');
            $table->bigInteger('total_price');
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
        Schema::dropIfExists('valuation_pre_operation_costs');
    }
}
