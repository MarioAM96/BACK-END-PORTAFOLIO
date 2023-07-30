<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('personas', PersonaController::class);
//Route::get('/personas', [PersonaController::class, 'index']);

header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');

Route::prefix('usuarios')->group(function () {
    // Ruta para mostrar la lista de personas (index)
    Route::get('/personas', [PersonaController::class, 'getAllPersonas']);

    // Otras rutas relacionadas con PersonaController
    Route::get('/personas/{id}', [PersonaController::class, 'show']);
    Route::post('/personas', [PersonaController::class, 'store']);
    Route::put('/personas/{id}', [PersonaController::class, 'update']);
    Route::delete('/personas/{id}', [PersonaController::class, 'destroy']);
});