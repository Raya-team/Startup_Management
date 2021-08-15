<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsibilityMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsibility_member', function (Blueprint $table) {
            $table->bigInteger('member_id')->unsigned();
            $table->foreign('member_id')->references('id')->on('team_members')->onDelete('cascade');
            $table->bigInteger('responsibility_id')->unsigned();
            $table->foreign('responsibility_id')->references('id')->on('responsibilities')->onDelete('cascade');
            $table->primary(['member_id' , 'responsibility_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('responsibility_member');
    }
}
