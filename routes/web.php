<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

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
Route::get('/usuarios',[UsuarioController::class,'index']);
Route::get('/usuarios/novo',[UsuarioController::class,'create']);
Route::post('/usuarios/novo',[UsuarioController::class,'store']);
Route::get('/usuarios/edita/{id}',[UsuarioController::class,'edit']);
Route::put('/usuarios/edita/{id}',[UsuarioController::class,'update']);
Route::get('/usuarios/mostrar/{id}',[UsuarioController::class,'show']);
