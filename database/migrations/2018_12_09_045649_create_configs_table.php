<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('meta_title');
            $table->string('meta_keyword');
            $table->string('meta_description');
            $table->string('meta_company_name');
            $table->string('meta_company_address');
            $table->string('meta_company_phone');
            $table->string('meta_company_fax');
            $table->string('meta_company_mail');
            $table->string('meta_company_facebook');
            $table->string('meta_company_linkedin');
            $table->string('meta_company_youtobe');
            $table->string('meta_company_logo');
            $table->string('meta_company_icon');
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
        Schema::dropIfExists('configs');
    }
}
