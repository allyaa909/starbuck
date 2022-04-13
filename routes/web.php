<?php

use App\Http\Controllers\Search;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PayController;
use App\Http\Controllers\CashController;
use App\Http\Controllers\KopiController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ConfirmController;
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
Route::get('/', [App\Http\Controllers\KopiController::class, 'index']);
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
Route::post('/bayar', [App\Http\Controllers\BayarController::class, 'pay']);

Auth::routes();


Route::prefix('admin')->name('admin.')->group(function(){
       
    Route::middleware(['guest:admin'])->group(function(){
          Route::view('/login','admin.login')->name('login');
          Route::post('/check',[AdminController::class,'check'])->name('check');
    });

    Route::middleware(['auth:admin'])->group(function(){
        Route::view('/home','admin.index')->name('home');
        Route::post('/logout',[AdminController::class,'logout'])->name('logout');
        Route::get('/customer',[AdminController::class,'customer'])->name('customer');
        Route::get('/order',[AdminController::class,'order'])->name('order');
        Route::get('/products',[AdminController::class,'view'])->name('products');
        Route::get('/order',[AdminController::class,'order'])->name('order');
        Route::get('/pesanan',[AdminController::class,'pesanan'])->name('pesanan');
        Route::get('/menu',[AdminController::class,'menu'])->name('menu');
        Route::get('/coffee/{id}',[AdminController::class,'coffee']);
        Route::get('/bakery/{id}',[AdminController::class,'bakery']);
        Route::get('/updatecoffee',[AdminController::class,'updatecoffee'])->name('updatecoffee');
        Route::get('/addcoffee/{id}',[AdminController::class,'addcoffee']);
        Route::post('/update',[AdminController::class,'update'])->name('update');
    });

});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/verifikasi', [App\Http\Controllers\PayController::class, 'verifikasi']);
Route::get('cash/{id}', [App\Http\Controllers\CashController::class, 'check']);
Route::get('/konfirmasi', [App\Http\Controllers\ConfirmController::class, 'confirm']);

Route::get('/home/coffee/{id}',[App\Http\Controllers\KopiController::class, 'coffe']); {
}

Route::get('/home/baverages', function () {
    return view('order.bakery', [
        "title" => "Bakery" 
    ]);
});

Route::get('/home/bakery',[App\Http\Controllers\KopiController::class, 'bakery']); {
  
}
Route::get('/home/snacks',[App\Http\Controllers\KopiController::class, 'snacks']); {
  
}
Route::get('/search',[App\Http\Controllers\Search::class, 'search']); {
  
}