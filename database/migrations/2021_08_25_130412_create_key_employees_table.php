<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeyEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('key_employees', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->bigInteger('team_id')->unsigned();
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
            $table->bigInteger('education_id')->unsigned();
            $table->foreign('education_id')->references('id')->on('education')->onDelete('cascade');
            $table->string('major');
            $table->bigInteger('age');
            $table->tinyInteger('resume');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('key_employees');
    }
}
