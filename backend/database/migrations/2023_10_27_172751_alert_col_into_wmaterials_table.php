<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AlertColIntoWmaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('w_materials')->truncate();
        Schema::table('w_materials', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('code');
            $table->unsignedBigInteger('material_id');
            $table->unsignedBigInteger('supplier_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('w_materials', function (Blueprint $table) {
            $table->string('name');
            $table->string('code');
            $table->dropColumn('material_id');
            $table->dropColumn('supplier_id');
        });
    }
}
