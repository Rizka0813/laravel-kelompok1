<?php

use App\Http\Controllers\SupplierControler;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('Data_suppliers', SupplierControler::class);
Route::get('/register', [TextController::class, 'register']);
Route::get('/login', [TextController::class, 'register']);