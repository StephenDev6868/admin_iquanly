<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColDetailConfigIntoConfigCutDiagramTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('config_cut_diagrams', function (Blueprint $table) {
            $table->jsonb('detail_config')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('config_cut_diagrams', function (Blueprint $table) {
            $table->dropColumn('detail_config');
        });
    }
}
