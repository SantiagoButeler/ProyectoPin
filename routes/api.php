<?php

use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\RevisionController;
use App\Models\Consulta;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Este seria el end point para traer todas las consultas de la base de datos
// primer campo url // segundo campo a que controlador se dirije // tercer campo a cual funcion se dirije 
Route::get('all_consultas',[ConsultaController::class,'index']);

// Este seria el end point para registrar datos en la base de datos
// primer campo url // segundo campo a que controlador se dirije // tercer campo a cual funcion se dirije 
Route::post('registroConsulta',[ConsultaController::class,'store']);

