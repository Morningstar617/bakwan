<?php
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