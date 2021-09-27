<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KasirController;

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

Route::get('/', [KasirController::class, 'index']);
Route::get('/test', [KasirController::class, 'test']);

Route::get('/get_products', [KasirController::class, 'get'])->name('get_products');

Route::get('/ss', function() {
	return "hello world";
});

