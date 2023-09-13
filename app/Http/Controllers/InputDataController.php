<?php

namespace App\Http\Controllers;

use App\Models\DataKelas;
use Illuminate\Http\Request;

class InputDataController extends Controller
{
    public function index()
    {
        return view('insert-data', ['title' => 'Input Data']);
    }

    public function store(Request $request)
    {
        // Validasi input data 
        $request->validate([
            'no_induk' => 'required',
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        // Store ke dalam database
        $datainput = new DataKelas();
        $datainput->no_induk = $request->input('no_induk');
        $datainput->nama = $request->input('nama');
        $datainput->alamat = $request->input('alamat'); //*Parameter input("atribut name pada blade")
        $datainput->save();

        // DataKelas::create($request->except(['_token', '_submit']));
        return redirect('/');
    }
}
/*
!Note
- Request adalah class yang digunakan untuk mengakses data yang dikirimkan oleh pengguna dalam permintaan HTTP.

- $request->validate([...]): Ini adalah kode untuk melakukan validasi data yang diterima dari permintaan HTTP. 
  Dalam contoh ini, validasi dilakukan untuk tiga field: 'no_induk', 'nama', dan 'alamat'. 
  Jika salah satu dari field tersebut kosong atau tidak sesuai dengan aturan validasi, maka akan terjadi kesalahan validasi.

- $datainput = new DataKelas();: Ini adalah kode untuk membuat instance baru dari model DataKelas. 
  Model DataKelas adalah representasi dari tabel dalam database yang digunakan untuk menyimpan data kelas.
*/