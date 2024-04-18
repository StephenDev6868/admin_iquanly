<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColDescriptionAndObjectIdIntoHistoryIoMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('history_io_materials', function (Blueprint $table) {
            $table->unsignedBigInteger('object_id')->default(1)->nullable();
            $table->text('description')->nullable();
            $table->dateTime('date_io')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('history_io_materials', function (Blueprint $table) {
            $table->dropColumn('object_id');
            $table->dropColumn('description');
            $table->dropColumn('date_io');
        });
    }
}
