<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ban_name')->nullable();
            $table->string('ban_picture')->nullable();
            $table->string('ban_link')->nullable();
            $table->string('ban_description')->nullable();
            $table->integer('ban_target')->default(0);
            $table->integer('ban_type')->default(0);
            $table->integer('ban_position')->default(0);
            $table->integer('ban_status')->default(0);
            $table->integer('ban_order')->default(0);
            $table->dateTime('ban_time_start');
            $table->dateTime('ban_time_end');
            $table->integer('ban_admin_id')->default(0);
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
        Schema::dropIfExists('banners');
    }
}
