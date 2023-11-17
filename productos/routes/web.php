<?php

use App\Http\Controllers\productoController;
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

Route::get('producto',[productoController::class,'index']);
Route::get('producto/{id}/edit',[productoController::class,'edit']);
Route::put('producto/{id}',[productoController::class,'update']);