<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketAttachment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_ticket_attachment', function (Blueprint $table) {
            $table->increments('ticket_attachment_id');
            $table->integer("TicketID");
            $table->string("file_name");
            $table->string("display_name");
            $table->string("extension");
            $table->integer("file_size");
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
        Schema::dropIfExists('_ticket_attachment');
    }
}
