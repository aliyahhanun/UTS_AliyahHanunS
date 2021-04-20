<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function _construct() {
        $this->middleware('auth');
    }
    
    public function index() {
        $user = Auth::user();
        return view('home', ['user' => $user]);
    }

    // public function about() {
    //     echo nl2br("NIM : 1941720175 \n \n Nama : Aliyah Hanun S");
    // }

    // public function article($id) {
    //     echo "Halaman artikel dengan ID ". $id;
    // }
}
