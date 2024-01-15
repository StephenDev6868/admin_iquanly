<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColNoteIntoProcessCutOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('process_cut_orders', function (Blueprint $table) {
            $table->text('note')->nullable();
            $table->bigInteger('material_id')->nullable();
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
            $table->dropColumn('note');
            $table->dropColumn('material_id');
        });
    }
}
