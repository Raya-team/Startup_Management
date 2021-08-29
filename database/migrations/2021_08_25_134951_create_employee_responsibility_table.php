<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeResponsibilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_responsibility', function (Blueprint $table) {
            $table->bigInteger('employee_id')->unsigned();
            $table->foreign('employee_id')->references('id')->on('key_employees')->onDelete('cascade');
            $table->bigInteger('responsibility_id')->unsigned();
            $table->foreign('responsibility_id')->references('id')->on('responsibilities')->onDelete('cascade');
            $table->primary(['employee_id' , 'responsibility_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_responsibility');
    }
}
