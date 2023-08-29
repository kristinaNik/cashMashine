<?php

use App\Http\Controllers\CashMachineController;
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
    return view('cash_machine');
});

Route::get('/home', [CashMachineController::class, 'index'])->name('home');
Route::get('/add', 'WebDashboardController@addForm')->name('add-configuration');
