<?php
<<<<<<< HEAD

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\BarangModels;
use App\Models\Transaksi;
use Illuminate\Http\Request;


class TransaksiController extends Controller
{
    public function tampil()
    {
        $transaksi = Transaksi::all();
        return view('admin.h-admin', compact('transaksi'));
    }

    public function index()
    {
        // Ambil semua data barang dari database
        $barang = BarangModels::all();

        // Kirim data barang ke view
        return view("admin.transaksi-admin", ['barang' => $barang]);
    }


    public function submit(Request $request)
    {
        $request->validate([
            'searchUID' => 'required',
            'searchName' => 'required',
            'searchStatus' => 'required',
            'barang1' => 'required',
            'jumlah1' => 'required|integer|min:1',
            'barang2' => 'nullable|string',
            'jumlah2' => 'nullable|integer|min:1',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'nullable|date|after_or_equal:tanggal_pinjam',
        ]);

        // Cari UID di tabel users
        $user = User::where('uid', $request->searchUID)->first();

        // Jika UID tidak ditemukan, kembalikan dengan error
        if (!$user) {
            return back()->withErrors(['searchUID' => 'UID tidak ditemukan.'])->withInput();
        }

        // Pengecekan nama dan status berdasarkan UID
        if ($user->name !== $request->searchName) {
            return back()->withErrors(['searchName' => 'Nama tidak sesuai dengan UID yang diberikan.'])->withInput();
        }
        if ($user->role !== $request->searchStatus) {
            return back()->withErrors(['searchStatus' => 'Status tidak sesuai dengan UID yang diberikan.'])->withInput();
        }

        // Cek keberadaan barang di database
        $barang1 = BarangModels::where('nama_barang', $request->barang1)->first();
        $barang2 = $request->filled('barang2') ? BarangModels::where('nama_barang', $request->barang2)->first() : null;

        // Validasi keberadaan barang
        if (!$barang1) {
            return back()->withErrors(['barang1' => 'Barang 1 tidak ditemukan.'])->withInput();
        }
        if ($request->filled('barang2') && !$barang2) {
            return back()->withErrors(['barang2' => 'Barang 2 tidak ditemukan.'])->withInput();
        }

        // Cek stok barang mencukupi
        if ($barang1->jumlah_barang < $request->jumlah1) {
            return back()->withErrors(['jumlah1' => 'Stok Barang 1 tidak mencukupi.'])->withInput();
        }
        if ($barang2 && $barang2->jumlah_barang < $request->jumlah2) {
            return back()->withErrors(['jumlah2' => 'Stok Barang 2 tidak mencukupi.'])->withInput();
        }

        // Lakukan pengurangan stok
        $barang1->jumlah_barang -= $request->jumlah1;
        $barang1->save();

        if ($barang2) {
            $barang2->jumlah_barang -= $request->jumlah2;
            $barang2->save();
        }

        $transaksi = new Transaksi();
        $transaksi->searchUID = $request->searchUID;
        $transaksi->searchName = $user->name; // Ambil nama dari tabel users
        $transaksi->searchStatus = $user->role; // Ambil status dari tabel users
        $transaksi->barang1 = $request->barang1;
        $transaksi->jumlah1 = $request->jumlah1;
        $transaksi->barang2 = $request->barang2;
        $transaksi->jumlah2 = $request->jumlah2;
        $transaksi->tanggal_pinjam = $request->tanggal_pinjam;
        $transaksi->tanggal_kembali = $request->tanggal_kembali;
        $transaksi->save();

        // Redirect atau berikan respon
        return redirect()->route('trans-index')->with('success', 'Transaksi berhasil dilakukan, stok barang telah diperbarui.');
    }

    public function finish($id)
    {
        // Ambil transaksi berdasarkan ID
        $transaksi = Transaksi::find($id);

        if ($transaksi) {
            // Ambil barang yang terkait dengan transaksi
            $barang1 = BarangModels::where('nama_barang', $transaksi->barang1)->first();
            $barang2 = $transaksi->barang2 ? BarangModels::where('nama_barang', $transaksi->barang2)->first() : null;

            // Jika barang ditemukan, kembalikan jumlahnya
            if ($barang1) {
                $barang1->jumlah_barang += $transaksi->jumlah1;
                $barang1->save();
            }

            if ($barang2) {
                $barang2->jumlah_barang += $transaksi->jumlah2;
                $barang2->save();
            }

            // Hapus transaksi
            $transaksi->delete();

            // Redirect atau beri respon
            return redirect()->route('admin.h-admin')->with('sukses', 'Transaksi berhasil diselesaikan dan stok barang telah dikembalikan.');
        } else {
            return redirect()->route('admin.h-admin')->with('error', 'Transaksi tidak ditemukan.');
        }
    }
}
=======
namespace App\Http\Controllers;

use App\Models\TransaksiModels;
use Illuminate\Http\Request;
use App\Models\BarangModels;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class TransaksiController extends Controller
{   
    public function index()
    {
        return view("admin.transaksi-admin", ['barang' => []]);
    }

    public function checkUID(Request $request)
    {
        $uid = $request->input('uid');

        if ($uid) {
            $user = User::where('uid', $uid)->first();
            if ($user) {
                return response()->json([
                    'name' => $user->name,
                    'role' => $user->role,
                    'error' => false
                ]);
            } else {
                return response()->json([
                    'name' => '',
                    'role' => '',
                    'error' => true,
                    'message' => 'UID not found'
                ]);
            }
        }

        return response()->json([
            'name' => '',
            'role' => '',
            'error' => true,
            'message' => 'UID not provided'
        ]);
    }


    public function search(Request $request)
    {
        $search = $request->input('search');
        $barang = BarangModels::where('nama_barang', 'like', "%$search%")->get();

        return view('admin.transaksi-admin', ['barang' => $barang]);
    }

    



}
>>>>>>> 5ceee63523c621d4d6a35481391a31bae819c5b9
