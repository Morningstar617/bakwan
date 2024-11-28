<?php

namespace App\Http\Controllers;

use App\Models\BarangModels;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TabelAdminController extends Controller
{
    public function index(): View
    {
<<<<<<< HEAD
        // Ambil semua data barang
=======

        // $data = BarangModels::latest()->paginate(10);
>>>>>>> 5ceee63523c621d4d6a35481391a31bae819c5b9
        $barang = BarangModels::all();
        return view("admin.tabel-barang-admin", compact('barang'));
    }

<<<<<<< HEAD
    public function edit($id)
    {
        // Ambil data barang berdasarkan ID
        $barang = BarangModels::findOrFail($id);
        return view('admin.update-admin', compact('barang'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input (kecuali kode_barang, karena tidak boleh diubah)
        $validatedData = $request->validate([
            'nama_barang' => 'required|string|max:255',
            'deskripsi_barang' => 'nullable|string',
            'jumlah_barang' => 'required|integer|min:1',
        ]);

        // Ambil data barang dari database
        $barang = BarangModels::findOrFail($id);

        // Update hanya kolom yang diizinkan
        $barang->nama_barang = $validatedData['nama_barang'];
        $barang->deskripsi_barang = $validatedData['deskripsi_barang'];
        $barang->jumlah_barang = $validatedData['jumlah_barang'];
        // Kode barang tidak diubah
        $barang->save();

        return redirect()->route('tabel-view')->with('success', 'Item updated successfully.');
    }

    public function destroy($id)
    {
        // Hapus data barang berdasarkan ID
        $barang = BarangModels::findOrFail($id);
        $barang->delete();

=======
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
>>>>>>> 5ceee63523c621d4d6a35481391a31bae819c5b9
        return redirect()->route('tabel-view')->with('success', 'Product deleted successfully.');
    }
}
