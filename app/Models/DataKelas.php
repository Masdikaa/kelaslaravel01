<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKelas extends Model
{
    use HasFactory;
    protected $table = 'data_kelas_a';
    protected $fillable = [
        'no_induk',
        'nama',
        'alamat'
    ]; // Field yang bisa di isi

    public function scopeFilter($query, array $filters)
    {
        // Name blade
        $query->when($filters['filterkelas'] ?? false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                // Database kolom
                $query->where('alamat', 'like', '%' . $search . '%');
            });
        });
    }
}
