<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected  $table='tickets';
    protected  $fillable=['DisplayTicketID','Subject','Description'];
    /*'RequestTypeID','StatusID','PriorityID','UrgentID','CategoryID','SubCategoryID','ItemID','ImpactID','DepartmentID','LevelID','LocationID','TicketModeID','CreatedUser','UpdatedUser','CreatedDate','UpdatedDate','RequestedUser','AssignedUser','AssignedDate','DueDate','SolutionDescription','IPAddress','ClosedDate','TicketCloseModelID','StatusCloseReason','Is_FCR','Is_Active','TicketStatusMessage','EstimatedTime','SpentTime','Is_Validate_EstimatedTime'*/

}
