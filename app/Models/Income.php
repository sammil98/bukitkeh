<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'tahun',
        'bulan',
        'target',
        'amount',
        'user_id'
    ];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['tahun'] ?? false, function ($query, $tahun) {
            return $query->where('tahun', $tahun);
        });
    }
}
