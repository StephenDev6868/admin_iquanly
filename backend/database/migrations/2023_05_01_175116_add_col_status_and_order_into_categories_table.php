<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColStatusAndOrderIntoCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->tinyInteger('status')->nullable();
            $table->integer('order')->nullable();
        });

        Schema::table('sub_categorys', function (Blueprint $table) {
            $table->tinyInteger('status')->nullable();
            $table->integer('order')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('order');
        });

        Schema::table('sub_categorys', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('order');
        });
    }
}
