<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColsIntoWMaterialsTablePart1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('materials', function (Blueprint $table) {
            $table->string('mToKg')->nullable();
        });

        Schema::table('products', function (Blueprint $table) {
            $table->string('size')->default('M')->nullable();
            $table->string('part_number')->nullable();
            $table->jsonb('materials')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
