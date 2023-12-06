<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjamans';
    protected $fillable = ['pengguna_id', 'mobil_id', 'tanggal_mulai', 'tanggal_selesai', 'status'];
}
