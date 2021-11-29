<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToOutsourcingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('outsourcings', function (Blueprint $table) {
            $table->bigInteger('team_id')->unsigned()->after('number');
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
            $table->tinyInteger('year')->after('number');
            $table->bigInteger('total_cost')->after('number');
            $table->bigInteger('unit_cost')->after('number');
            $table->dropColumn('unit_price');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('outsourcings', function (Blueprint $table) {
            $table->dropColumn('total_cost');
            $table->dropColumn('unit_cost');
            $table->integer('unit_price')->after('number');
            $table->dropForeign('outsourcings_team_id_foreign');
            $table->dropColumn('team_id');
            $table->dropColumn('year');
        });
    }
}
