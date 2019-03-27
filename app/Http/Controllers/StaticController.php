<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasien;

class StaticController extends Controller
{
    // public function menuPasien(){
    //     return view('static/menuPasien');
    // }

    // public function tambahPasien(){
    //     return view('static/tambahPasien');
    // }
    public function img()
    {
        $pasiens = Pasien::all();
        return view('static/img')->with('pasiens',$pasiens);
    }
}
