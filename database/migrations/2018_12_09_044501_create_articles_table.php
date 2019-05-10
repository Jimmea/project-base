<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('art_name')->nullable();
            $table->string('art_slug')->nullable();
            $table->string('art_picture')->nullable();
            $table->integer('art_cat_id')->default(0);
            $table->integer('art_status')->default(0);
            $table->integer('art_seo')->default(0);
            $table->integer('art_hot')->default(0);
            $table->string('art_description_short')->nullable();
            $table->string('art_full_path')->nullable();
            $table->text('art_full_path_link')->nullable();
            $table->integer('art_author_id')->default(0);
            $table->integer('art_admin_id')->default(0);
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
        Schema::dropIfExists('articles');
    }
}
