<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LaporanController;

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

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/postLogin', [LoginController::class, 'postLogin'])->name('postLogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/admin', [AdminController::class, 'index'])->name('home');
Route::get('/admin/inputdistributor', [AdminController::class, 'inputDistri'])->name('inputDistri');
Route::post('/admin/storedistributor', [AdminController::class, 'storeDistri'])->name('storeDistri');
Route::get('/admin/inputdistributor/{id_distributor}/edit', [AdminController::class, 'editDistri'])->name('editDistri');
Route::post('/admin/inputdistributor/update/{id_distributor}', [AdminController::class, 'updateDistri'])->name('updateDistri');
Route::get('/admin/inputdistributor/{id_distributor}', [AdminController::class, 'destroyDistri'])->name('destroyDistri');

Route::get('/admin/inputbuku', [AdminController::class, 'inputBuku'])->name('inputBuku');
Route::post('/admin/storebuku', [AdminController::class, 'storeBuku'])->name('storeBuku');


Route::get('/admin/semuabuku', [AdminController::class, 'semuaBuku'])->name('semuaBuku');
Route::get('admin/filterpenulis', [AdminController::class, 'filterPenulis'])->name('filterPenulis');
Route::get('admin/filterpenulis/cari', [AdminController::class, 'cariPenulis'])->name('cariPenulis');
Route::get('/admin/seringterjual', [AdminController::class, 'seringTerjual'])->name('seringTerjual');


