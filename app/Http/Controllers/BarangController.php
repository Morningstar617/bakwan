<?php

namespace App\Http\Controllers;

use App\Models\BarangModels;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        return view("admin.barang-admin");
    }

    public function create()
    {
        return view("admin.barang-admin");
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:225|string',
            'deskripsi' => 'required|max:225|string',
            'jumlah' => 'required|max:225|integer',
            'active' => 'sometimes',
<<<<<<< HEAD
            'yakin' => 'accepted',
        ], [
            'yakin.accepted' => 'Anda harus mencentang checkbox untuk melanjutkan.',
        ]);

        $kode_barang = 'BRG-' . str_pad(rand(0, 99999), 5, '0', STR_PAD_LEFT);

        BarangModels::create([
            'kode_barang' => $kode_barang,
=======
            'yakin' => 'accepted', 
        ], [
            'yakin.accepted' => 'Anda harus mencentang checkbox untuk melanjutkan.', 
        ]);

        BarangModels::create([
>>>>>>> 5ceee63523c621d4d6a35481391a31bae819c5b9
            'nama_barang' => $request->nama,
            'deskripsi_barang' => $request->deskripsi,
            'jumlah_barang' => $request->jumlah,
            // 'active' => $request->active == true ? 1 : 0,
        ]);
        return redirect('admin.barang-admin')->with('status', 'barang ditambahkan');
    }
}
