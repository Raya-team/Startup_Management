<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessCanvasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_canvases', function (Blueprint $table) {
            $table->id();
            $table->text('key_partners');
            $table->text('main_activities');
            $table->text('main_sources');
            $table->text('cost_structure');
            $table->text('suggested_value');
            $table->text('communication_with_clients');
            $table->text('distribution_channels');
            $table->text('customer_section');
            $table->text('income_flow');
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
        Schema::dropIfExists('business_canvases');
    }
}
