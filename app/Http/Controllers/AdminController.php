<?php

namespace App\Http\Controllers;

use App\Models\User;
<<<<<<< HEAD
use App\Models\Transaksi;
=======
>>>>>>> 5ceee63523c621d4d6a35481391a31bae819c5b9
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
<<<<<<< HEAD
    function index()
    {
        return view('admin.h-admin');
    }

    public function login()
    {
        return view('login');
    }

    //admin create new account for (mahasiswa,dosen and univ) controller 
    public function create()
    {
        return view('make-account-admin');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'uid' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'role' => 'required|in:univ,dosen,mahasiswa',
        ]);

        $users = User::create([
            'name' => $request->name,
            'uid' => $request->uid,
            'password' => $request->password,
            'role' => $request->role,
        ]);
        $transaksi = Transaksi::all();
        return view('admin.h-admin', compact('transaksi'));
=======
    function index(){
        return view('admin.h-admin');
        
>>>>>>> 5ceee63523c621d4d6a35481391a31bae819c5b9
    }

    //admin create new account for (mahasiswa,dosen and univ) controller 
    public function create(){
        return view ('make-account-admin');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'uid' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'role' => 'required|in:univ,dosen,mahasiswa',
        ]);

        $users = User::create([
            'name' => $request->name,
            'uid' => $request->uid,
            'password' => $request->password,
            'role' => $request->role,
        ]);

        return redirect('admin.h-admin')->with('success', 'Barang berhasil ditambahkan!');
    }
}

