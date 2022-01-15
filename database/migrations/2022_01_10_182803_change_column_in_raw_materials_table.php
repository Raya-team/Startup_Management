<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnInRawMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('raw_materials', function (Blueprint $table) {
            $table->dropColumn('description');
            $table->bigInteger('product_name')->unsigned()->after('id')->nullable();
            $table->foreign('product_name')->references('id')->on('products')->onDelete('cascade');
            $table->bigInteger('name')->unsigned()->after('id')->nullable();
            $table->foreign('name')->references('id')->on('raw_material_names')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('raw_materials', function (Blueprint $table) {
            $table->text('description');
            $table->dropForeign('raw_materials_product_name_foreign');
            $table->dropColumn('product_name');
            $table->dropForeign('raw_materials_name_foreign');
            $table->dropColumn('name');
        });
    }
}
