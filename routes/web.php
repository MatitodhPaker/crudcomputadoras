<?php

use App\Http\Controllers\computadorasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[computadorasController::class,'index']);
Route::get('/agregar',[computadorasController::class,'create']);
Route::post('/store',[computadorasController::class,'store']);
Route::get('/show/{id}',[computadorasController::class,'show'])->name('eliminar');
Route::delete('/destroy/{id}',[computadorasController::class,'destroy'])->name('destroy');
Route::get('/edit/{id}',[computadorasController::class,'edit'])->name('editar');
Route::put('/update/{id}',[computadorasController::class,'update'])->name('update');