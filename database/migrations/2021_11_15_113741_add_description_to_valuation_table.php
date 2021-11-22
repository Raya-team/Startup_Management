<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDescriptionToValuationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('valuation_tenements', function (Blueprint $table) {
            $table->bigInteger('description')->unsigned()->after('id');
            $table->foreign('description')->references('id')->on('lands')->onDelete('cascade');
        });
        Schema::table('valuation_machineries', function (Blueprint $table) {
            $table->bigInteger('description')->unsigned()->after('id');
            $table->foreign('description')->references('id')->on('equipment_and_machineries')->onDelete('cascade');
        });
        Schema::table('valuation_office_supplies', function (Blueprint $table) {
            $table->bigInteger('description')->unsigned()->after('id');
            $table->foreign('description')->references('id')->on('office_equipment_and_supplies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('valuation_tenements', function (Blueprint $table) {
            $table->dropForeign('valuation_tenements_description_foreign');
            $table->dropColumn('description');
        });
        Schema::table('valuation_machineries', function (Blueprint $table) {
            $table->dropForeign('valuation_machineries_description_foreign');
            $table->dropColumn('description');
        });
        Schema::table('valuation_office_supplies', function (Blueprint $table) {
            $table->dropForeign('valuation_office_supplies_description_foreign');
            $table->dropColumn('description');
        });
    }
}
