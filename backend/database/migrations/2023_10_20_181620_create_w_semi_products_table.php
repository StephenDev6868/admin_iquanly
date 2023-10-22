<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWSemiProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('w_semi_products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->jsonb('sd_map')->nullable();
//            $table->string('layer')->nullable();
//            $table->string('layer_print')->nullable();
//            $table->string('sd_3cm')->nullable();
//            $table->string('total_fabric')->nullable();
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
        Schema::dropIfExists('w_semi_products');
    }
}
