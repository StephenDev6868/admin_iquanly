<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTypeColIntoWMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('w_materials', function (Blueprint $table) {
            $table->string('quantity_input')->change();
            $table->string('quantity_contain')->change();
            $table->string('quantity_use')->change();
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
            $table->bigInteger('quantity_input')->change();
            $table->bigInteger('quantity_contain')->change();
            $table->bigInteger('quantity_use')->change();
        });
    }
}
