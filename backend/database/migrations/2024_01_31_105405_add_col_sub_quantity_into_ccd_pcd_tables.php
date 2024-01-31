<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColSubQuantityIntoCcdPcdTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('process_cut_orders', function (Blueprint $table) {
            $table->string('sub_quantity')->nullable();
        });

        Schema::table('config_cut_diagrams', function (Blueprint $table) {
            $table->string('sub_quantity')->nullable();
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
            $table->dropColumn('sub_quantity');
        });

        Schema::table('config_cut_diagrams', function (Blueprint $table) {
            $table->dropColumn('sub_quantity');
        });
    }
}
