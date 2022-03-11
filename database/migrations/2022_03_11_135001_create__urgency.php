<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrgency extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_urgency', function (Blueprint $table) {
            $table->increments('urgency_id');
            $table->string("name");
            $table->string("description");
            $table->boolean("Is_Active");
            $table->boolean("Is_Defaults");
            $table->boolean("Is_client_visible");
            $table->datetime("created_date");
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
        Schema::dropIfExists('_urgency');
    }
}
