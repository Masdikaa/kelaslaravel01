<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKelas extends Model
{
    use HasFactory;
    protected $table = 'data_kelas_a';
    protected $fillable = ['no_induk', 'nama', 'alamat']; // field yang bisa di isi

}
