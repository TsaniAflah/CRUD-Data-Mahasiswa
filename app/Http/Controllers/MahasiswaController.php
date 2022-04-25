<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function readdata()
    {
        // ambil data dari table mahasiswa
        $mahasiswa = DB::table('mahasiswa')->get();
    
        // mengirim ke alamat mahasiswa untuk ditampilkan data
        return view('datamahasiswa',['mahasiswa'=>$mahasiswa]);
    }

    public function input()
    {
        return view('inputdata');
    }

    public function store(Request $request)
    {
        //memasukkan data kedalam databse
        DB::table('mahasiswa')->insert([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'jurusan' => $request->jurusan,
            'fakultas' => $request->fakultas,
            'universitas' => $request->universitas
        ]);

        return redirect('/tampildata');
    }

    public function edit($nim){
        #ambil data mhs based nim
        $mahasiswa = DB::table('mahasiswa')->where('nim', $nim)->get();
        #passing data
        return view('edit', ['mahasiswa' => $mahasiswa]);
    }

    public function update(request $request){
        DB::table('mahasiswa')->where('nim', $request->nim)->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'jurusan' => $request->jurusan,
            'fakultas' => $request->fakultas,
            'universitas' => $request->universitas
        ]); 
        return redirect('/tampildata');
    }

    public function hapus($nim){
        DB::table('mahasiswa')->where('nim', $nim)->delete();
        return redirect('/tampildata');
    }
}
