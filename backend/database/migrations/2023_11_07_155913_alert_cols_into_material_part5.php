<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlertColsIntoMaterialPart5 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('materials', function (Blueprint $table) {
            $table->string('unit_quota')->nullable();
            $table->dropColumn('mToKg');
            $table->string('num_quota')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('materials', function (Blueprint $table) {
            $table->dropColumn('unit_quota')->nullable();
            $table->dropColumn('num_quota');
            $table->string('mToKg')->nullable();
        });
    }
}
