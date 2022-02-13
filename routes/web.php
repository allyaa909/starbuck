<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KopiController;
use App\Http\Controllers\AddtocartController;
use App\Http\Controllers\Backend\OrderController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/order', [App\Http\Controllers\KopiController::class, 'lihatmenu']);
Route::get('/check', [App\Http\Controllers\Backend\OrderController::class, 'store']);
Route::get('/checkout', [App\Http\Controllers\KopiController::class, 'lihat']);
Route::get('/checkout/{id}', [App\Http\Controllers\AddtocartController::class, 'ambil']);
Route::get('/trash/{id}', [App\Http\Controllers\AddtocartController::class, 'trash']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
