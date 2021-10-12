<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerRecognitionQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_recognition_questions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('team_id')->unsigned();
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
            $table->boolean('q1')->default(false);
            $table->boolean('q2')->default(false);
            $table->boolean('q3')->default(false);
            $table->boolean('q4')->default(false);
            $table->boolean('q5')->default(false);
            $table->boolean('q6')->default(false);
            $table->boolean('q7')->default(false);
            $table->boolean('q8')->default(false);
            $table->boolean('q9')->default(false);
            $table->boolean('q10')->default(false);
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
        Schema::dropIfExists('customer_recognition_questions');
    }
}
