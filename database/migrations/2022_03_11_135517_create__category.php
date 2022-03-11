<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_category', function (Blueprint $table) {
            $table->increments('category_id');
            $table->string('name');
            $table->string('description');
            $table->boolean('is_active');
            $table->boolean('is_default');
            $table->boolean('is_client_visible');
            $table->datetime('created_date');
            $table->integer('external_code');
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
        Schema::dropIfExists('_category');
    }
}
