<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_salaries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('work_day')->nullable();
            $table->string('permitted_day_off')->nullable();
            $table->string('not_allowed_day_off')->nullable();
            $table->string('overtime')->nullable();
            $table->string('late')->nullable();
            $table->string('early')->nullable();
            $table->string('support_money')->nullable();
            $table->string('advance')->nullable();
            $table->string('sum')->nullable();
            $table->dateTime('start_at')->nullable();
            $table->dateTime('end_at')->nullable();
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
        Schema::dropIfExists('user_salaries');
    }
}
