<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValuationTenementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valuation_tenements', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->bigInteger('area');
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
        Schema::dropIfExists('valuation_tenements');
    }
}
