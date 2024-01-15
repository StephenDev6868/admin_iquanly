<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePartnerSemiProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partner_semi_products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('semi_product_id')->nullable();
            $table->bigInteger('partner_id')->nullable();
            $table->bigInteger('order_id')->nullable();
            $table->bigInteger('product_id')->nullable();
            $table->string('input')->nullable();
            $table->string('output')->nullable();
            $table->string('amount_product_valid')->nullable();
            $table->string('amount_product_error')->nullable();
            $table->dateTime('day_input')->nullable();
            $table->dateTime('day_output')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_partner_semi_products');
    }
}
