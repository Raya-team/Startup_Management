<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUnitColumnsToTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('capacities', function (Blueprint $table) {
        $table->dropColumn('production_unit');
        $table->dropColumn('capacity_unit');
    });
        Schema::table('capacities', function (Blueprint $table) {
            $table->bigInteger('unit')->unsigned()->after('nominal_capacity');
            $table->foreign('unit')->references('id')->on('unit_of_measurements')->onDelete('cascade');
        });
        Schema::table('raw_materials', function (Blueprint $table) {
            $table->dropColumn('unit');
            $table->renameColumn('Consumption', 'consumption');
            $table->renameColumn('Unit_price', 'unit_price');
        });
        Schema::table('raw_materials', function (Blueprint $table) {
            $table->bigInteger('unit')->unsigned()->after('consumption');
            $table->foreign('unit')->references('id')->on('unit_of_measurements')->onDelete('cascade');
        });
        Schema::table('energy_consumptions', function (Blueprint $table) {
            $table->dropColumn('unit');
        });
        Schema::table('energy_consumptions', function (Blueprint $table) {
            $table->bigInteger('unit')->unsigned()->after('description');
            $table->foreign('unit')->references('id')->on('unit_of_measurements')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
