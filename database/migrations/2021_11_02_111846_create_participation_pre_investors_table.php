<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipationPreInvestorsTable extends Migration
{
    public function up()
    {
        Schema::create('participation_pre_investors', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('investor')->unsigned();
            $table->foreign('investor')->references('id')->on('team_members')->onDelete('cascade');
            $table->integer('investment');
            $table->bigInteger('team_id')->unsigned();
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('participation_pre_investors');
    }
}
