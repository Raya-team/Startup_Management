<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_managers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('shareholder_id')->unsigned();
            $table->foreign('shareholder_id')->references('id')->on('team_members')->onDelete('cascade');
            $table->string('phone_number');
            $table->string('email');
            $table->bigInteger('team_id')->unsigned();
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
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
        Schema::dropIfExists('business_managers');
    }
}
