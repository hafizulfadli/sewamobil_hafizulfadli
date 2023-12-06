<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;

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

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('post-login');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
Route::get('/register', [UserController::class, 'create'])->name('register');
Route::post('/register/insert', [UserController::class, 'store'])->name('insert');


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/pengguna', [UserController::class, 'index'])->name('pengguna');
Route::post('/pengguna/destroy', [UserController::class, 'destroy'])->name('destroy');

Route::resource('/mobil', MobilController::class);
Route::resource('/peminjaman', PeminjamanController::class);
Route::resource('/pengembalian', PengembalianController::class);
