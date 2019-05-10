<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesMultisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_multis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cat_name')->nullable();
            $table->string('cat_slug')->nullable();
            $table->string('cat_picture')->nullable();
            $table->string('cat_icon')->nullable();
            $table->integer('cat_parent_id')->default(0);
            $table->integer('cat_has_child')->default(0);
            $table->string('cat_all_child')->nullable();
            $table->integer('cat_active')->default(0);
            $table->integer('cat_order')->default(0);
            $table->string('cat_type')->nullable();
            $table->text('cat_full_path')->nullable();
            $table->text('cat_full_path_link')->nullable();
            $table->integer('cat_seo')->default(0);
            $table->integer('cat_hot')->default(0);
            $table->integer('cat_new')->default(0);
            $table->string('cat_meta_title')->nullable();
            $table->string('cat_meta_description')->nullable();
            $table->string('cat_meta_keyword')->nullable();
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
        Schema::dropIfExists('categories_multis');
    }
}
