<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnInWarrantiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('warranties', function (Blueprint $table) {
            $table->dropColumn('description');
            $table->bigInteger('product_name')->unsigned()->after('id')->nullable();
            $table->foreign('product_name')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('warranties', function (Blueprint $table) {
            $table->text('description');
            $table->dropForeign('raw_materials_product_name_foreign');
            $table->dropColumn('product_name');
        });
    }
}
