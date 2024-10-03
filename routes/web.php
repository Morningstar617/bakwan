<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\TabelAdminController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('login');
// });
// Route::get('/list', function () {
//     return view('barang-admin');
// });

Route::get('/',[SesiController::class,'index']);
Route::post('/',[SesiController::class,'login']);

Route::get('/admin.h-admin', [AdminController::class, 'index'])->name('h-admin');


Route::get('/admin.barang-admin', [BarangController::class, 'index'])->name('barang-admin');
Route::get('/admin.barang-admin', [BarangController::class, 'create'])->name('barang-admin');
Route::post('/admin.barang-admin', [BarangController::class, 'store']);

Route::get('$barang', [TabelAdminController::class, 'index'])->name('tabel-view');
Route::get('$barang/{kode_barang}/edit', [TabelAdminController::class, 'edit'])->name('tabel.edit');
Route::put('$barang/{kode_barang}', [TabelAdminController::class, 'update'])->name('tabel.update');
Route::delete('$barang/{kode_barang}', [TabelAdminController::class, 'destroy'])->name('tabel.destroy');




Route::get('/admin.tabel-barang-admin',[TabelAdminController::class,'index'])->name('tabel-admin');

// Route masuk ke halaman buat akun (admin)
Route::get('/createAccount', function () {
    return view('admin.make-account-admin');
});
Route::get('/home', function () {
    return view('admin.h-admin');
});
Route::get('/login', function () {
    return view('login');
});

//route for admin if he want to make a new account (with radio box for any role) 
Route::get('admin.make-account-admin/create', [AdminController::class, 'create'])->name('make.create');
Route::post('admin.make-account-admin', [AdminController::class, 'store'])->name('make.store');

//transaksi route
Route::get('/admin.transaksi-admin',[TransaksiController::class,'index'])->name('trans-index');
Route::get('/admin.transaksi-admin/search', [TransaksiController::class,'search'])->name('trans-search');
Route::get('/check-uid', [TransaksiController::class, 'checkUID'])->name('trans-uid');


// Users Route
Route::get('/h-user', function() {
    return view('users.h-user');
});