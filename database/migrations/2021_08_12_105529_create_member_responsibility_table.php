<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberResponsibilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_responsibility', function (Blueprint $table) {
            $table->bigInteger('member_id')->unsigned();
            $table->foreign('member_id')->references('id')->on('team_members')->onDelete('cascade');
            $table->bigInteger('responsibility')->unsigned();
            $table->foreign('responsibility')->references('id')->on('responsibilities')->onDelete('cascade');
            $table->primary(['member_id' , 'responsibility']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('member_responsibility');
    }
}
