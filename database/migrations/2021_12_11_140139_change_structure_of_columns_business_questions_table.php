<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeStructureOfColumnsBusinessQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('business_questions', function (Blueprint $table) {
            $table->string('growth_center')->nullable()->change();
            $table->string('site_address')->nullable()->change();
            $table->text('important_note')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('business_questions', function (Blueprint $table) {
            $table->string('growth_center')->change();
            $table->string('site_address')->change();
            $table->text('important_note')->change();
        });
    }
}
