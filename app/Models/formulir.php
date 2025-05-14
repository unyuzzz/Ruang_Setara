<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulir extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pelapor',
        'kontak',
        'terlapor',
        'tanggal_kejadian',
        'lokasi',
        'kronologi',
        'jenis',
    ];

    protected $dates = [
        'tanggal_kejadian', // Pastikan kolom ini ada di sini
    ];

    protected $table = 'formulir';
    // protected $timestamps = false;
}
