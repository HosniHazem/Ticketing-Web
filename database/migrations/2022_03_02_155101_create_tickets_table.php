<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('DisplayTicketID');
            $table->String('Subject');
            $table->String('Description');
            $table->integer('RequestTypeID');
            $table->integer('StatusID');
            $table->integer("PriorityID");
            $table->integer("UrgentID");
            $table->integer("CategoryID");
            $table->integer("SubCategoryID");
            $table->integer("ItemID")->unique();
            $table->integer("ImpactID");
            $table->integer("DepartmentID");
            $table->integer("LevelID");
            $table->integer("LocationID");
            $table->integer("TicketModeID");
            $table->String("CreatedUser");
            $table->String("UpdatedUser");
            $table->datetime("CreatedDate");
            $table->datetime("UpdatedDate");
            $table->String("RequestedUser");
            $table->String("AssignedUser");
            $table->datetime("AssignedDate");
            $table->datetime("DueDate");
            $table->String("SolutionDescription");
            $table->integer("IPAddress");
            $table->datetime("ClosedDate");
            $table->integer("TicketCloseModelID");
            $table->String("StatusCloseReason");
            $table->boolean("Is_FCR");
            $table->boolean("Is_Active");
            $table->String("TicketStatusMessage");
            $table->datetime("EstimatedTime");
            $table->datetime("SpentTime");
            $table->boolean("Is_Validate_EstimatedTime");
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
        Schema::dropIfExists('tickets');
    }
}
