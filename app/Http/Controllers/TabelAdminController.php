<?php

namespace App\Http\Controllers;

use App\Models\BarangModels;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TabelAdminController extends Controller
{
    public function index(): View
    {
        // Ambil semua data barang
        $barang = BarangModels::all();
        return view("admin.tabel-barang-admin", compact('barang'));
    }

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

        return redirect()->route('tabel-view')->with('success', 'Product deleted successfully.');
    }
}
