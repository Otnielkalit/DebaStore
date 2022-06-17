<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('pesan/{id}', [App\Http\Controllers\PesanController::class, 'index']);

Route::post('pesan/{id}', [App\Http\Controllers\PesanController::class, 'pesan']);

Route::get('checkout', [App\Http\Controllers\PesanController::class, 'check_out']);

Route::delete('check-out/{id}', [App\Http\Controllers\PesanController::class, 'delete']);

Route::get('konfirmasi-check-out', [App\Http\Controllers\PesanController::class, 'konfirmasi']);

Route::get('profile', [App\Http\Controllers\ProfileController::class, 'index']);

Route::post('profile', [App\Http\Controllers\ProfileController::class, 'update']);

Route::get('history', [App\Http\Controllers\HistoryController::class, 'index']);

Route::get('history/{id}', [App\Http\Controllers\HistoryController::class, 'detail']);


// For Admin
Route::get('/user-role', [HomeController::class, 'userManagement'])->name('user.role');
Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/add-menu', [MenuController::class, 'menu'])->name('add.menu');
Route::post('/add-menu-process', [MenuController::class, 'store'])->name('add.menu.process');
Route::get('/edit-menu', [MenuController::class, 'getUpdate'])->name('edit.menu');


Route::get('/logout', [HomeController::class, 'logout'])->name('logout');