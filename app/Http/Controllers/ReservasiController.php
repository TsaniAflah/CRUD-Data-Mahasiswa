<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function readdata()
    {
        // ambil data dari table mahasiswa
        $reservasi = DB::table('reservasi')->get();
    
        // mengirim ke alamat mahasiswa untuk ditampilkan data
        return view('datareservasi',['reservasi'=>$reservasi]);
    }

    public function input()
    {
        return view('inputdata');
    }

    public function store(Request $request)
    {
        //memasukkan data kedalam databse
        DB::table('reservasi')->insert([
            'Nama' => $request->Nama,
            'Hotel' => $request->Hotel,
            'Kedatangan' => $request->Kedatangan,
            'Keberangkatan' => $request->Keberangkatan,
            'Jenis' => $request->Jenis
        ]);

        return redirect('/tampildata');
    }

    public function edit($nama){
        #ambil data mhs based nim
        $reservasi = DB::table('reservasi')->where('Nama', $nama)->get();
        #passing data
        return view('edit',['reservasi' => $reservasi]);
    }

    public function update(request $request){
        DB::table('reservasi')->where('Nama', $request->Nama)->update([
            'Nama' => $request->Nama,
            'Hotel' => $request->Hotel,
            'Kedatangan' => $request->Kedatangan,
            'Keberangkatan' => $request->Keberangkatan,
            'Jenis' => $request->Jenis
        ]); 
        return redirect('/tampildata');
    }

    public function hapus($nama){
        DB::table('reservasi')->where('Nama', $nama)->delete();
        return redirect('/tampildata');
    }
}
