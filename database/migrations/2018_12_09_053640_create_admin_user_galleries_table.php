<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminUserGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_user_galleries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('adm_ug_file_name');
            $table->string('adm_ug_orginal_name');
            $table->string('adm_ug_alt_text');
            $table->string('adm_ug_album_id');
            $table->string('adm_ug_order');
            $table->string('adm_ug_width');
            $table->string('adm_ug_height');
            $table->string('adm_ug_file_size');
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
        Schema::dropIfExists('admin_user_galleries');
    }
}
