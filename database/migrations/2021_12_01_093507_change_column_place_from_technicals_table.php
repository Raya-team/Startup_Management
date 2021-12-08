<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnPlaceFromTechnicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('technicals', function (Blueprint $table) {
            $table->dropColumn('terms_and_conditions_of_work');
            $table->dropColumn('production_schedule');
        });
        Schema::table('technicals', function (Blueprint $table) {
            $table->text('production_schedule')->after('technical_features_product');
            $table->text('terms_and_conditions_of_work')->after('technical_features_product');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('technicals', function (Blueprint $table) {
            //
        });
    }
}
