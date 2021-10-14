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
Route::get('/cliente',[ClienteController::class,'showAll']);//Listo
Route::post('/cliente/signup',[ClienteController::class,'signup']);//Listo
Route::post('/cliente/login',[ClienteController::class,'login']);//Listo
Route::post('/cliente/update',[ClienteController::class,'update']);
Route::post('/cliente/search',[ClienteController::class,'search']);

//Route::resource('cliente','ClienteController');

Route::get('/cliente/find',[ClienteController::class,'find']);
/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/
