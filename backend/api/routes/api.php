<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\HabitacionController;

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

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */


Route::post('/cliente/signup',[ClienteController::class,'signup']);
Route::post('/cliente/login',[ClienteController::class,'login']);
Route::get('/habitacion/search', [HabitacionController::class, 'search']);
Route::post('/habitacion/filter', [HabitacionController::class, 'filter']);

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('/cliente',[ClienteController::class,'showAll']);
    Route::post('/cliente/update',[ClienteController::class,'update']);
    Route::post('/reservacion/create',[ReservaController::class,'create']);
    Route::get('/reservacion/history',[ReservaController::class,'showByCliente']);
});