<?php

use App\Models\user;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Customer;
use GuzzleHttp\Middleware;
use Yajra\Datatables\Datatables;
use App\Http\Controllers\CustomerController;
use App\Models\item;
use App\Http\Controllers\ItemController;

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

Route::get('/home', function () {
    return view('beranda');
})->middleware('auth');

route::get('/',[LoginController::class,'index'])->name('login')->middleware('guest');
route::post('/',[LoginController::class,'authentication']);
route::post('/logout',[LoginController::class,'logout']);


route::get('/register',[RegisterController::class,'index'])->middleware('guest');
route::post('/register',[RegisterController::class,'store']);

Route::get('/dash', function () {
    return view('dashboard');
});
Route::get('/custom', function () {
    return view('customer.index');
});
Route::get('/data', function () {
    return Datatables::of(Customer::query())
    ->addColumn('action','action')
    ->make(true);
})->name('data');


Route::get('/custdel', function () {
    return view('customervajra');
});

Route::get('/mdlcustom', function () {
    return view('customer.modal');
});
Route::resource('/cust', CustomerController::class);

// Route::get('/item', function () {
//     return view('itemku.index');
// });

Route::get('/itemku', function () {
    return Datatables::of(item::query())
    ->addColumn('total','total')
    ->addColumn('action','Actionitem')
    ->make(true);
})->name('itemku');

Route::get('/item', [ItemController::class, 'index']);
Route::post('/item_store', [ItemController::class, 'store']);
Route::post('/item_update/{id}', [ItemController::class, 'update']);
Route::post('/item_destroy/{id}', [ItemController::class, 'destroy']);
Route::delete('/item_destroy/{id}', [ItemController::class, 'destroy']);
Route::put('/item_update/{id}', [ItemController::class, 'update']);