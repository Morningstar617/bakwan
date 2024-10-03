<?php

namespace App\Http\Controllers;

use App\Models\BarangModels;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TabelAdminController extends Controller
{
    public function index(): View
    {

        // $data = BarangModels::latest()->paginate(10);
        $barang = BarangModels::all();
        return view("admin.tabel-barang-admin", compact('barang'));
    }

    public function edit($kode_barang)
    {
        $barang = BarangModels::find($kode_barang);
        return view('admin.update-admin', compact('barang'));
    }

    public function update(Request $request, $kode_barang)
    {
        $barang = BarangModels::find($kode_barang);
        $barang->nama_barang = $request->input('nama_barang');
        $barang->deskripsi_barang = $request->input('deskripsi_barang');
        $barang->jumlah_barang = $request->input('jumlah_barang');

        $barang->save();
        return redirect('admin.tabel-barang-admin')->with('success', 'Item updated successfully');
    }


    public function destroy($kode_barang)
    {
        $barang = BarangModels::findOrFail($kode_barang);
        $barang->delete();
        return redirect()->route('tabel-view')->with('success', 'Product deleted successfully.');
    }
}
