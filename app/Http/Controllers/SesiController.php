<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index()
    {
        return view('login');
    }

    function login(Request $request)
    {
        $request->validate([
            'uid' => 'required',
            'password' => 'required',
        ], [
            'uid.required' => 'uid wajib diisi',
            'password.required' => 'password wajib diisi',
        ]);

        $infologin = [
            'uid' => $request->uid,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            $transaksi = Transaksi::all();
            return view('admin.h-admin', compact('transaksi'));
        } else {
            return redirect()->route('login.tampil')->withErrors('email dan password yang dimasukkan tidak sesuai')->withInput();
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect()->route('login.tampil');
    }
}
