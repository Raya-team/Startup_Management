<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropDescriptionFromValuationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('valuation_tenements', function (Blueprint $table) {
            $table->dropColumn('description');
        });
        Schema::table('valuation_machineries', function (Blueprint $table) {
            $table->dropColumn('description');
        });
        Schema::table('valuation_office_supplies', function (Blueprint $table) {
            $table->dropColumn('description');
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
            $table->text('description')->after('id');
        });
        Schema::table('valuation_machineries', function (Blueprint $table) {
            $table->text('description')->after('id');
        });
        Schema::table('valuation_office_supplies', function (Blueprint $table) {
            $table->text('description')->after('id');
        });
    }
}
