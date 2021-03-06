<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValuationTransportationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valuation_transportations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('description')->unsigned();
            $table->foreign('description')->references('id')->on('transportations')->onDelete('cascade');
            $table->bigInteger('number');
            $table->bigInteger('owner')->unsigned();
            $table->foreign('owner')->references('id')->on('team_members')->onDelete('cascade');
            $table->bigInteger('unit_price');
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
        Schema::dropIfExists('valuation_transportations');
    }
}
