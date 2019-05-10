<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_modules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mod_parent_id')->default(0);
            $table->integer('mod_order')->default(0);
            $table->string('mod_name')->nullable();
            $table->string('mod_icon')->nullable();
            $table->string('mod_uri')->nullable();
            $table->string('mod_has_child')->nullable();
            $table->string('mod_list_child')->nullable();
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
        Schema::dropIfExists('admin_modules');
    }
}
