<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\TabelAdminController;
use App\Http\Controllers\TransaksiController;
<<<<<<< HEAD
use App\Models\Transaksi;
=======
>>>>>>> 5ceee63523c621d4d6a35481391a31bae819c5b9
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; // Tambahkan ini
use App\Models\User;



// Route::get('/', function () {
//     return view('login');
// });
// Route::get('/list', function () {
//     return view('barang-admin');
// });
<<<<<<< HEAD

Route::get('/', [SesiController::class, 'index']);
Route::post('/', [SesiController::class, 'login'])->name('login.tampil');
Route::post('/logout', [SesiController::class, 'logout'])->name('logout');

Route::get('/admin.h-admin', [AdminController::class, 'index'])->name('h-admin');
Route::get('/admin.login', [AdminController::class, 'login'])->name('el-login');


Route::get('/admin.barang-admin', [BarangController::class, 'index'])->name('barang-admin');
Route::get('/admin.barang-admin', [BarangController::class, 'create'])->name('barang-admin');
Route::post('/admin.barang-admin', [BarangController::class, 'store']);

Route::get('$barang', [TabelAdminController::class, 'index'])->name('tabel-view');
Route::get('$barang/{id}/edit', [TabelAdminController::class, 'edit'])->name('tabel.edit');
Route::put('$barang/{id}', [TabelAdminController::class, 'update'])->name('tabel.update');
Route::delete('$barang/{id}', [TabelAdminController::class, 'destroy'])->name('tabel.destroy');




Route::get('/admin.tabel-barang-admin', [TabelAdminController::class, 'index'])->name('tabel-admin');

// Route masuk ke halaman buat akun (admin)
Route::get('/acc', function () {
    return view('admin.make-account-admin');
});
// Route::get('/home', function () {
//     return view('admin.h-admin');
// });
Route::get('/login', function () {
    return view('login');
});
=======
>>>>>>> 5ceee63523c621d4d6a35481391a31bae819c5b9


<<<<<<< HEAD
Route::get('/get-user-info', function (Request $request) {
    $user = User::where('uid', $request->uid)->first();
=======
Route::get('/admin.h-admin', [AdminController::class, 'index'])->name('h-admin');


Route::get('/admin.barang-admin', [BarangController::class, 'index'])->name('barang-admin');
Route::get('/admin.barang-admin', [BarangController::class, 'create'])->name('barang-admin');
Route::post('/admin.barang-admin', [BarangController::class, 'store']);

Route::get('$barang', [TabelAdminController::class, 'index'])->name('tabel-view');
Route::get('$barang/{kode_barang}/edit', [TabelAdminController::class, 'edit'])->name('tabel.edit');
Route::put('$barang/{kode_barang}', [TabelAdminController::class, 'update'])->name('tabel.update');
Route::delete('$barang/{kode_barang}', [TabelAdminController::class, 'destroy'])->name('tabel.destroy');
>>>>>>> 5ceee63523c621d4d6a35481391a31bae819c5b9

    if ($user) {
        return response()->json([
            'nama' => $user->nama,
            'status' => $user->status,
        ]);
    }

    return response()->json([
        'nama' => null,
        'status' => null,
    ], 404);
});

<<<<<<< HEAD
=======

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

>>>>>>> 5ceee63523c621d4d6a35481391a31bae819c5b9
//route for admin if he want to make a new account (with radio box for any role) 
Route::get('admin.make-account-admin/create', [AdminController::class, 'create'])->name('make.create');
Route::post('admin.make-account-admin', [AdminController::class, 'store'])->name('make.store');

//transaksi route
<<<<<<< HEAD
Route::get('/admin.transaksi-admin/search', [TransaksiController::class, 'search'])->name('trans-search');
Route::get('/admin.check-uid', [TransaksiController::class, 'checkUID'])->name('trans-uid');
// //transaksi route (cart sesion)
// Route::post('/admin.remove-item-cart', [TransaksiController::class, 'removeItemCart'])->name('remove-item-cart');
// Route::post('/admin.tambah-item-cart', [TransaksiController::class, 'tambahItemCart'])->name('tambah-cart');
// Route::post('/admin.kurangi-item-cart', [TransaksiController::class, 'kurangiItemCart'])->name('kurangi-cart');
// Route::post('/admin.pinjam-barang', [TransaksiController::class, 'storeCart'])->name('pinjam-barang');

Route::get('/home', [TransaksiController::class, 'tampil'])->name('admin.h-admin');
Route::get('/admin.transaksi-admin', [TransaksiController::class, 'index'])->name('trans-index');
Route::post('/admin/submitTransaksi', [TransaksiController::class, 'submit'])->name('submit-transaksi');
Route::post('/finish-transaksi/{id}', [TransaksiController::class, 'finish'])->name('finish-transaksi');

// Users Route
Route::get('/h-user', function () {
    return view('users.h-user');
});

// Iki route gawe Struk transaksi
Route::get('/struk', function () {
    return view('admin.struk');
});
=======
Route::get('/admin.transaksi-admin',[TransaksiController::class,'index'])->name('trans-index');
Route::get('/admin.transaksi-admin/search', [TransaksiController::class,'search'])->name('trans-search');
Route::get('/check-uid', [TransaksiController::class, 'checkUID'])->name('trans-uid');


// Users Route
Route::get('/h-user', function() {
    return view('users.h-user');
});
>>>>>>> 5ceee63523c621d4d6a35481391a31bae819c5b9
