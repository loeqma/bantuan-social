<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    use HasFactory;

    // Kolom yang boleh diisi (mass assignment)
    protected $fillable = [
        'nama_lengkap',
        'nik',
        'alamat',
        'jenis_bantuan',
        'tanggal_lahir',
        'status_penerima',
    ];
}
