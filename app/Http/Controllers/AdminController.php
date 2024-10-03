<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index(){
        return view('admin.h-admin');
        
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

