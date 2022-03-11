<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolePermission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_role_permission', function (Blueprint $table) {
            $table->increment('role_permission_id');      
            $table->integer('role_id');
            $table->integer('menu_id');
            $table->boolean('is_full');
            $table->boolean('is_view');
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
        Schema::dropIfExists('_role_permission');
    }
}
