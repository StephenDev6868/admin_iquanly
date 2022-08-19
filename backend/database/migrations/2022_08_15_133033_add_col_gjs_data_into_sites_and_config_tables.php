<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColGjsDataIntoSitesAndConfigTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('configs', function (Blueprint $table) {
            $table->text('gjs_data')->nullable();
        });

        Schema::table('sites', function (Blueprint $table) {
            $table->text('gjs_data')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('configs', function (Blueprint $table) {
            $table->dropColumn('gjs_data');
        });

        Schema::table('sites', function (Blueprint $table) {
            $table->dropColumn('gjs_data');
        });
    }
}
