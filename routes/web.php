<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\DetailMenuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProfileController;

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

Route::get('/list-menu', [HomeController::class, 'menu'])->name('product.menu');

Route::get('pesan/{id}', [App\Http\Controllers\PesanController::class, 'index']);

Route::post('pesan-process/{id}', [App\Http\Controllers\PesanController::class, 'pesan']);

Route::get('checkout', [App\Http\Controllers\PesanController::class, 'check_out']);

Route::delete('check-out/{id}', [App\Http\Controllers\PesanController::class, 'delete']);

Route::get('konfirmasi-check-out', [App\Http\Controllers\PesanController::class, 'konfirmasi']);

Route::get('profile', [App\Http\Controllers\ProfileController::class, 'index']);

Route::post('profile', [App\Http\Controllers\ProfileController::class, 'update']);

Route::get('history', [App\Http\Controllers\HistoryController::class, 'index'])->name('history.detail');

Route::get('history/{id}', [App\Http\Controllers\HistoryController::class, 'detail']);

Route::get('/agen', [HomeController::class, 'useragen']);

Route::get('/contact', [HomeController::class, 'contact'])->name('reservation');

Route::post('/reservation', [HomeController::class, 'reservation']);

Route::get('/upload/{id}', [HomeController::class, 'upload'])->name('upload');

Route::post('/upload-process/{id}', [HomeController::class, 'uploadProcess'])->name('upload.process');

Route::get('/aboutususer', [AboutUsController::class, 'indexuser']);

Route::get('/detailbandrek', [DetailMenuController::class, 'detailbandrek']);

Route::get('/usertambah', function() {
    return view('user.tambah');
});

// Route::get('/aboutususer', [AboutUsController::class, 'slideSatu']);


// For Admin
Route::get('/user-role', [HomeController::class, 'userManagement'])->name('user.role');

Route::get('/delete-role/{id}', [HomeController::class, 'delete'])->name('delete.user');

Route::get('/trash', [HomeController::class, 'trash'])->name('trash.user');

Route::get('/restore/{id}', [HomeController::class, 'restore'])->name('restore.user');

Route::get('/restore-all', [HomeController::class, 'restoreAll'])->name('restore.all.user');

Route::get('/delete-role/{id}', [HomeController::class, 'delete'])->name('delete.user');

Route::get('/trash', [HomeController::class, 'trash'])->name('trash.user');

Route::get('/restore/{id}', [HomeController::class, 'restore'])->name('restore.user');

Route::get('/restore-all', [HomeController::class, 'restoreAll'])->name('restore.all.user');

Route::get('/menu', [MenuController::class, 'index'])->name('menu');

Route::get('/add-menu', [MenuController::class, 'menu'])->name('add.menu');

Route::post('/add-menu-process', [MenuController::class, 'store'])->name('add.menu.process');

Route::get('/edit-menu', [MenuController::class, 'getUpdate'])->name('edit.menu');

Route::get('/edit-menu/{id}', [MenuController::class, 'getUpdate'])->name('edit.menu');

Route::post('/edit-menu-process/{id}', [MenuController::class, 'update'])->name('edit.menu.process');

Route::get('/delete/{id}', [MenuController::class, 'delete'])->name('delete');
Route::get('/aboutus', [AboutUsController::class, 'index'])->name('aboutus');
Route::get('/addaboutus', [AboutUsController::class, 'create']);
Route::post('/add-aboutus-process', [AboutUsController::class, 'store'])->name('add.aboutus.process');
Route::delete('/delete/{id}', [AboutUsController::class, 'destroy'])->name('delete');
Route::get('/edit-aboutus/{id}', [AboutUsController::class, 'edit'])->name('edit.aboutus');
Route::post('/edit-aboutus-process', [AboutUsController::class, 'update'])->name('edit.aboutus.process');

Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

Route::get('/viewagen', [HomeController::class, 'viewagen']);

Route::post('/uploadagen', [HomeController::class, 'uploadagen']);

Route::get('/updateagen/{id}', [HomeController::class, 'updateagen']);

Route::post('/editagen/{id}', [HomeController::class, 'editagen']);

Route::get('/addagen', [HomeController::class, 'addagen']);

Route::get("/deleteagen/{id}",[HomeController::class,"deleteagen"]);

Route::get('/viewreservation', [HomeController::class, 'viewreservation']);

Route::get('/order-details', [PesanController::class, 'orderDetails'])->name('oder.deatail');

Route::get('/profile-admin', [ProfileController::class, 'profileAdmin'])->name('profile.admin');

Route::get('/setting', [ProfileController::class, 'setting'])->name('setting.admin');

Route::post('/setting-process', [ProfileController::class, 'updateProfileAdmin'])->name('setting.process');

