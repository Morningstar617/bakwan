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

<<<<<<< HEAD
    function login(Request $request)
    {
=======
    function login(Request $request){
>>>>>>> 5ceee63523c621d4d6a35481391a31bae819c5b9
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

<<<<<<< HEAD
        if (Auth::attempt($infologin)) {
            $transaksi = Transaksi::all();
            return view('admin.h-admin', compact('transaksi'));
        } else {
            return redirect()->route('login.tampil')->withErrors('email dan password yang dimasukkan tidak sesuai')->withInput();
=======
        if(Auth::attempt($infologin)){
            return redirect('admin.h-admin');
        }else{
            return redirect('login')->withErrors('email dan password yang dimasukkan tidak sesuai')->withInput();
>>>>>>> 5ceee63523c621d4d6a35481391a31bae819c5b9
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect()->route('login.tampil');
    }
}
