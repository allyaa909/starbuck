<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PayController;
use App\Http\Controllers\KopiController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\PaymentController;
use App\Http\Middleware\PreventBackHistory;
use App\Http\Controllers\AddtocartController;
use App\Http\Controllers\Admin\AdminController;
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
// Route::get('/confirm', function () {
//     return view('confirm');
// });
// Route::get('/admin/login', function () {
//     return view('admin.login');
// });

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/order', [App\Http\Controllers\KopiController::class, 'lihatmenu']);
Route::get('/check', [App\Http\Controllers\Backend\OrderController::class, 'store']);
Route::get('/checkout', [App\Http\Controllers\KopiController::class, 'lihat']);
Route::get('/checkout/{id}', [App\Http\Controllers\AddtocartController::class, 'ambil']);
Route::get('/trash/{id}', [App\Http\Controllers\AddtocartController::class, 'trash']);
// Route::get('/confirm', [App\Http\Controllers\PaymentController::class, 'pay']);
Route::post('/confirm', [App\Http\Controllers\EmailController::class, 'confirm']);

Auth::routes();


Route::prefix('admin')->name('admin.')->group(function(){
       
    Route::middleware(['guest:admin'])->group(function(){
          Route::view('/login','admin.login')->name('login');
          Route::post('/check',[AdminController::class,'check'])->name('check');
    });

    Route::middleware(['auth:admin'])->group(function(){
        Route::view('/home','admin.index')->name('home');
        Route::post('/logout',[AdminController::class,'logout'])->name('logout');
    });

});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/verifikasi', [App\Http\Controllers\PayController::class, 'verifikasi']);
