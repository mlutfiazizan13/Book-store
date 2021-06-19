<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ManagerController;

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

//laporan
Route::get('/admin/semuabuku', [AdminController::class, 'semuaBuku'])->name('adminSemuaBuku');
Route::get('/admin/filterpenulis', [AdminController::class, 'filterPenulis'])->name('adminFilterPenulis');
Route::get('/admin/filterpenulis/cari', [AdminController::class, 'cariPenulis'])->name('adminCariPenulis');
Route::get('/admin/seringterjual', [AdminController::class, 'seringTerjual'])->name('adminSeringTerjual');
Route::get('/admin/tidakterjual', [AdminController::class, 'tidakTerjual'])->name('adminTidakTerjual');



Route::get('/manager', [ManagerController::class, 'index'])->name('managerHome');

Route::get('/manager/semuabuku', [ManagerController::class, 'semuaBuku'])->name('managerSemuaBuku');
Route::get('/manager/filterpenulis', [ManagerController::class, 'filterPenulis'])->name('managerFilterPenulis');
Route::get('/manager/filterpenulis/cari', [ManagerController::class, 'cariPenulis'])->name('managerCariPenulis');
Route::get('/manager/seringterjual', [ManagerController::class, 'seringTerjual'])->name('managerSeringTerjual');
Route::get('/manager/tidakterjual', [ManagerController::class, 'tidakTerjual'])->name('managerTidakTerjual');
Route::get('/manager/profil', [ManagerController::class, 'profil'])->name('profil');
Route::get('/manager/cetakfaktur', [ManagerController::class, 'cetakFaktur'])->name('managerCetakFaktur');
Route::get('/manager/semuapenjualan', [ManagerController::class, 'semuaPenjualan'])->name('managerSemuaPenjualan');
Route::get('/manager/jualpertanggal', [ManagerController::class, 'jualPertanggal'])->name('managerJualPertanggal');



Route::get('/kasir', [KasirController::class, 'index'])->name('kasirHome');
Route::get('/kasir/penjualan', [KasirController::class, 'penjualan'])->name('kasirPenjualan');
Route::get('/kasir/cetakfaktur', [KasirController::class, 'cetakFaktur'])->name('kasirCetakFaktur');
Route::get('/kasir/semuapenjualan', [KasirController::class, 'semuaPenjualan'])->name('kasirSemuaPenjualan');
Route::get('/kasir/jualpertanggal', [KasirController::class, 'jualPertanggal'])->name('kasirJualPertanggal');



