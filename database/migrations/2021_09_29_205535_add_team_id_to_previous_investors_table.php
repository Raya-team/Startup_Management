<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTeamIdToPreviousInvestorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('previous_investors', function (Blueprint $table) {
            $table->bigInteger('team_id')->unsigned()->after('percent');
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('previous_investors', function (Blueprint $table) {
            $table->dropForeign('previous_investors_team_id_foreign');
            $table->dropColumn('team_id');
        });
    }
}
