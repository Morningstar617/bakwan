<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index(){
        // echo "atmin datanggggggggg";
        // echo "<h1>" . Auth::user()->name . "</h1>";
        return view('h-admin');
        
    }
}
