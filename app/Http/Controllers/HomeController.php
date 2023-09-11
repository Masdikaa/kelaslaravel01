<?php

namespace App\Http\Controllers;

use App\Models\DataKelas;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $dataKelasA = DataKelas::all();
        return view(
            'home',
            ['title' => 'Home', "dataKelasA" => $dataKelasA]
        );
    }
}
