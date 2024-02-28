<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function inputdata(Request $request ){
        $request = request()->validate([
            'nama' => 'required|min:3',
            'jurusan' => 'required|min:3',
            'angkatan' => 'sometimes',
            'kelas' => 'sometimes',
        ]);
        DB::table('students')->insert([
            'nama' => $request['nama'],
            'jurusan' => $request['jurusan'],
            'angkatan' => $request['angkatan'],
            'kelas' => $request['kelas'],
        ]);
        return view('daftar');
        // return redirect()->back()-with('success', 'data berhasil disimpan');
        // return response()->json(['message' => 'Data berhasil disimpan']);
    }
}
