<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnInManPowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('man_powers', function (Blueprint $table) {
            $table->dropColumn('description');
            $table->boolean('manpower_type')->after('id');
            $table->bigInteger('name')->unsigned()->after('id')->nullable();
            $table->foreign('name')->references('id')->on('man_power_names')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('man_powers', function (Blueprint $table) {
            $table->text('description');
            $table->dropColumn('manpower_type');
            $table->dropForeign('man_powers_name_foreign');
            $table->dropColumn('name');
        });
    }
}
