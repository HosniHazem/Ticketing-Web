<?php
use App\Http\Controllers\TicketController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Route::middleware(['auth','isAdmin'])->group(function() {
    Route::get('{id}/show', [TicketController::class,'show']);
    Route::get('Tickets', [TicketController::class,'index']);
    Route::delete('{id}/delete', [TicketController::class,'destroy']);
    Route::put('{id}/update', [TicketController::class,'update']);
    Route::post('/create',[TicketController::class,'store']);
//});
//Auth::routes();

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

