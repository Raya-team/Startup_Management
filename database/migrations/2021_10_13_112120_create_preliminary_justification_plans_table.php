<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreliminaryJustificationPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preliminary_justification_plans', function (Blueprint $table) {
            $table->id();
            $table->text('requirement');
            $table->text('solution');
            $table->text('competitors');
            $table->text('competitive_advantage');
            $table->text('target_market');
            $table->text('technology_level');
            $table->text('required_budget');
            $table->text('income');
            $table->string('technology_life');
            $table->text('plan_development');
            $table->text('technical_knowledge');
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
        Schema::dropIfExists('preliminary_justification_plans');
    }
}
