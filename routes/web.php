<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProdukSayaController;
use App\Http\Controllers\CategoryController;
use App\Models\Category;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product', [ProductController::class, 'index'])->name('product');
// data produk
Route::get('/productSaya', [ProdukSayaController::class, 'index'])->name('data_produk');
Route::get('/productSaya/tambah', [ProdukSayaController::class, 'tambah'])->name('data_produk.tambah');
Route::post('/productSaya/aksi_tambah', [ProdukSayaController::class, 'aksi_tambah'])->name('data_produk.aksi_tambah');
Route::get('/productSaya/edit/{id}',[ProdukSayaController::class,'edit'])->name('data_produk.edit');
Route::post('/productSaya/aksi_edit/{id}',[ProdukSayaController::class,'aksi_edit'])->name('data_produk.aksi_edit');
Route::post('/productSaya/aksi_hapus/{id}', [ProdukSayaController::class, 'aksi_hapus'])->name('data_produk.aksi_hapus');
// kategori
Route::get('/category',[CategoryController::class, 'index'])->name('category');
Route::get('/category/tambah', [CategoryController::class, 'tambah'])->name('kategori.tambah');
Route::post('/category/aksi_tambah', [CategoryController::class, 'aksi_tambah'])->name('kategori.aksi_tambah');
Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('kategori.edit');
Route::post('/category/aksi_edit/{id}',[CategoryController::class,'aksi_edit'])->name('kategori.aksi_edit');
Route::post('/category/aksi_hapus/{id}', [CategoryController::class, 'aksi_hapus'])->name('kategori.aksi_hapus');
