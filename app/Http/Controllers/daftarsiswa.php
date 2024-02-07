<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class daftarsiswa extends Controller
{
    //
    public function siswa(){
        return view('daftar');
    }
    public function tambah(){
        return view('tambah');
    }
    public function edit(){
        return view('edit');
    }
}
