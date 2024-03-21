<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JamController;
use App\Http\Controllers\MobilsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransaksisController;
use App\Http\Controllers\PengembaliansController;
use App\Http\Controllers\AdminPanel\AdminController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::resource('/penggunas', \App\Http\Controllers\PenggunasController::class);
Route::resource('/mobils', \App\Http\Controllers\MobilsController::class);
Route::get('/data', [MobilsController::class, 'data']);
Route::get('/datasplit', [MobilsController::class, 'datasplit']);
Route::get('/input', [TransaksisController::class, 'input']);
Route::get('/list', [TransaksisController::class, 'list']);
Route::get('/kembali', [PengembaliansController::class, 'kembali']);
Route::resource('/transaksis', \App\Http\Controllers\TransaksisController::class);
Route::resource('/pengembalians', \App\Http\Controllers\PengembaliansController::class);
Route::get('/search-mobil', [TransaksisController::class, 'searchMobil'])->name('mobil.search');
Route::get('/timer', function () {
    return view('timer');
});
// routes/web.php




Route::get('/jams', [JamController::class, 'index'])->name('jams.index');
Route::post('/jams', [JamController::class, 'store'])->name('jams.store');
Route::get('/jams/create', [JamController::class, 'create'])->name('jams.create');
Route::get('/pembayaran', function () {
    return view('pembayaran');
});
Route::get('/split', function () {
    return view('split');
});



