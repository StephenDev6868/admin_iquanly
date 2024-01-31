<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColSubProductIdIntoCcdPcdTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('process_cut_orders', function (Blueprint $table) {
            $table->string('sub_product_id')->nullable();
        });

        Schema::table('config_cut_diagrams', function (Blueprint $table) {
            $table->string('sub_product_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('process_cut_orders', function (Blueprint $table) {
            $table->dropColumn('sub_product_id');
        });

        Schema::table('config_cut_diagrams', function (Blueprint $table) {
            $table->dropColumn('sub_product_id');
        });
    }
}
