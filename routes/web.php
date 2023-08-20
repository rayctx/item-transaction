<?php

use App\Http\Controllers\ItemsController;
use App\Http\Controllers\KindsController;
use App\Http\Controllers\TransactionsController;
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
    return view('layout.home');
});

Route::get('/home', function () {
    return view('layout.home');
});

Route::get('/items/add', function () {
    return view('items.add');
});

Route::get('/kinds/add', function () {
    return view('kinds.add');
});

Route::get('/transactions/add', function () {
    return view('transactions.add');
});

Route::resource('transactions', TransactionsController::class);
Route::resource('items', ItemsController::class);
Route::resource('kinds', KindsController::class);