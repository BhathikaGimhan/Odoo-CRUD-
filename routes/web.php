<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OdooController;

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

Route::get('/', function () {
    return view('welcome');
});
// Define a route to call the "index" method on the "OdooController" class
Route::get('/index', [App\Http\Controllers\OdooController::class, 'index']);
Route::get('/create', [OdooController::class, 'create'])->name('odoo.create');
Route::post('/store', [OdooController::class, 'store'])->name('product.store');


