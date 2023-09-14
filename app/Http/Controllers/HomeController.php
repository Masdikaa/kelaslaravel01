<?php

namespace App\Http\Controllers;

use App\Models\DataKelas;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // ?Eloquent ORM (Object-Relational Mapping) 
        // !$dataKelasA = DataKelas::all(); //Berfungsi untuk mengambil semua data yang ada dalam tabel yang sesuai dengan model DataKelas

        $dataKelasA = DataKelas::filter(request(['filterkelas']))->get();
        return view('home', [
            'title' => 'Home',
            "dataKelasA" => $dataKelasA
        ]);
    }
}
