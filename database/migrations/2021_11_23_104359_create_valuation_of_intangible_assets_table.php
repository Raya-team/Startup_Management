<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValuationOfIntangibleAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valuation_of_intangible_assets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('valuation_model')->unsigned();
            $table->foreign('valuation_model')->references('id')->on('valuation_models')->onDelete('cascade');
            $table->bigInteger('value')->nullable();
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
        Schema::dropIfExists('valuation_of_intangible_assets');
    }
}
