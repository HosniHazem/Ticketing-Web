<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade')->onUpdate('cascade');
            $table->string('display_name');
            $table->string('user_name');;
            $table->integer('phone_no');
            $table->integer('cell_phone_no');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->integer('pin_code');
            $table->string('job_title');
            $table->string('address');
            $table->integer('time_zone_id');
            $table->string('organization');
            $table->boolean('is_sendmail_password');
            $table->string('description');
            $table->binary('profile_picture');
            $table->boolean('is_active');
            $table->datetime('created_date');
            $table->integer('external_code');
            $table->integer('company_id');
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
        Schema::dropIfExists('users');
    }
}
