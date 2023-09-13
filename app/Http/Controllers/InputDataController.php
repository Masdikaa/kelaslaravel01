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
        $datainput->alamat = $request->input('alamat');
        $datainput->save();

        // DataKelas::create($request->except(['_token', '_submit']));
        return redirect('/');
    }
}
