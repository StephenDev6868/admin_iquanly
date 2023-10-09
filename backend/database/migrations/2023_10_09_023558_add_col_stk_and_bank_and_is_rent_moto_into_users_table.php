<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColStkAndBankAndIsRentMotoIntoUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('stk')->nullable();
            $table->string('bank')->nullable();
            $table->string('title_level')->nullable();
            $table->tinyInteger('is_rent_moto')->default(1);
            $table->string('amount_month')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('stk');
            $table->dropColumn('bank');
            $table->dropColumn('is_rent_moto');
            $table->dropColumn('amount_month');
            $table->dropColumn('title_level');
        });
    }
}
