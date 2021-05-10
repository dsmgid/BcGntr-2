<?php

use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class, 'index']);
Route::get('printd', [IndexController::class, 'dPrint']);
Route::get('printdt', [IndexController::class, 'tdPrint']);
Route::get('barang', [IndexController::class, 'getBarang']);
Route::get('barangjson', [IndexController::class, 'getBarangJson']);
Route::post('barang', [IndexController::class, 'addBarang']);
Route::delete('barang', [IndexController::class, 'delBarang']);
Route::post('harga', [IndexController::class, 'getHarga']);
Route::put('harga', [IndexController::class, 'addHarga']);
Route::delete('harga', [IndexController::class, 'delHarga']);
Route::get('print', [IndexController::class,'gPrint']);
Route::post('print', [IndexController::class, 'addPrint']);
