<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistik extends Model
{
    use HasFactory;
    protected $table = 'statistics';
    protected $fillable = ['bulan', 'tahun', 'jumlah_lakilaki', 'jumlah_perempuan', 'tidak_diketahui', 'user_id'];
}
