<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberShareQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_share_question', function (Blueprint $table) {
            $table->bigInteger('member_id')->unsigned();
            $table->foreign('member_id')->references('id')->on('team_members')->onDelete('cascade');
            $table->bigInteger('question_id')->unsigned();
            $table->foreign('question_id')->references('id')->on('share_questions')->onDelete('cascade');
            $table->primary(['member_id' , 'question_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('member_share_question');
    }
}
