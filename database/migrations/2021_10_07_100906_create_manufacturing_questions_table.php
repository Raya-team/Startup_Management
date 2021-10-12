<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManufacturingQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manufacturing_questions', function (Blueprint $table) {
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
            $table->boolean('q11')->default(false);
            $table->boolean('q12')->default(false);
            $table->boolean('q13')->default(false);
            $table->boolean('q14')->default(false);
            $table->boolean('q15')->default(false);
            $table->boolean('q16')->default(false);
            $table->boolean('q17')->default(false);
            $table->boolean('q18')->default(false);
            $table->boolean('q19')->default(false);
            $table->boolean('q20')->default(false);
            $table->boolean('q21')->default(false);
            $table->boolean('q22')->default(false);
            $table->boolean('q23')->default(false);
            $table->boolean('q24')->default(false);
            $table->boolean('q25')->default(false);
            $table->boolean('q26')->default(false);
            $table->boolean('q27')->default(false);
            $table->boolean('q28')->default(false);
            $table->boolean('q29')->default(false);
            $table->boolean('q30')->default(false);
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
        Schema::dropIfExists('manufacturing_questions');
    }
}
