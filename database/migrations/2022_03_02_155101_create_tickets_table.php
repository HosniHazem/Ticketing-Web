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
            $table->String('DisplayTicketID');
            $table->String('Subject');
            $table->String('Description');
            /*$table->Integer("RequestTypeID");
            $table->Integer("StatusID");
            $table->Integer("PriorityID");
            $table->Integer("UrgentID");
            $table->Integer("CategoryID");
            $table->Integer("SubCategoryID");
            $table->Integer("ItemID")->unique();
            $table->Integer("ImpactID");
            $table->Integer("DepartmentID");
            $table->Integer("LevelID");
            $table->Integer("LocationID");
            $table->Integer("TicketModeID");
            $table->String("CreatedUser");
            $table->String("UpdatedUser");
            $table->String("CreatedDate");
            $table->String("UpdatedDate");
            $table->String("RequestedUser");
            $table->String("AssignedUser");
            $table->String("AssignedDate");
            $table->String("DueDate");
            $table->String("SolutionDescription");
            $table->String("IPAddress");
            $table->String("ClosedDate");
            $table->String("TicketCloseModelID");
            $table->String("StatusCloseReason");
            $table->String("Is_FCR");
            $table->String("Is_Active");
            $table->String("TicketStatusMessage");
            $table->String("EstimatedTime");
            $table->String("SpentTime");
            $table->String("Is_Validate_EstimatedTime");*/
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
