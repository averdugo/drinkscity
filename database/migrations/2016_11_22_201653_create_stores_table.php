<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('r_name');
            $table->string('r_phone');
            $table->string('email')->unique();
            $table->string('name');
            $table->string('place');
            $table->integer('commune_id');
            $table->string('c_phone');
            $table->integer('store_type');
            $table->mediumText('schedules');
            $table->string('photo');
            $table->integer('user_id');
            $table->integer('status');
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
        Schema::drop('stores');
    }
}
