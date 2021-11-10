<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('markets', function (Blueprint $table) {
            $table->id();
            $table->text('product_introduction');
            $table->text('product_features');
            $table->text('product_competitive_advantages');
            $table->text('position_analysis');
            $table->text('product_pricing_strategy');
            $table->text('product_marketing_strategy');
            $table->text('market_status');
            $table->text('target_market');
            $table->text('forecast_the_future_of_the_market');
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
        Schema::dropIfExists('markets');
    }
}
