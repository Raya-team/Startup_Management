<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVariableTeamMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variable_team_member', function (Blueprint $table) {
            $table->bigInteger('variable_id')->unsigned();
            $table->foreign('variable_id')->references('id')->on('variables')->onDelete('cascade');
            $table->bigInteger('team_member_id')->unsigned();
            $table->foreign('team_member_id')->references('id')->on('team_members')->onDelete('cascade');
            $table->primary(['variable_id' , 'team_member_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('variable_team_member');
    }
}
