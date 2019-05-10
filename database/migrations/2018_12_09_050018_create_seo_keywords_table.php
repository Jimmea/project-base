<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeoKeywordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seo_keywords', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sek_name');
            $table->string('sek_name_md5');
            $table->string('sek_slug');
            $table->string('sek_order');
            $table->string('sek_show_top');
            $table->string('sek_show_footer');
            $table->string('sek_active');
            $table->string('sek_admin_id');
            $table->string('sek_lang_id');
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
        Schema::dropIfExists('seo_keywords');
    }
}
