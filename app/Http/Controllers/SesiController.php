<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SesiController extends Controller
{
    function index()
    {
        return view('login');
    }
    function login(Request $request){
        $request->validate([
            'uid'=>'required',
            'password'=>'required',
        ],[
            'uid.required' => 'uid wajib diisi',
            'password.required' => 'password wajib diisi',
        ]);

        $infologin = [
            'uid' => $request->uid,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            return redirect('/admin');
        }else{
            return redirect('')->withErrors('email dan password yang dimasukkan tidak sesuai')->withInput();
        }
    }
}
