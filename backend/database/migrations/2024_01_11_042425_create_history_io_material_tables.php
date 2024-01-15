<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryIoMaterialTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_io_materials', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('process_cut_order_id')->nullable();
            $table->bigInteger('creator_id')->nullable();
            $table->bigInteger('wmaterial_id')->nullable();
            $table->tinyInteger('type')->nullable()->comment('1: Input | 2: Output');
            $table->float('amount')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('history_io_material_tables');
    }
}
