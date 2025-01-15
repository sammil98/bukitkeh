<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon; // Pastikan untuk mengimpor Carbon

class Checkout extends Model
{
    use HasFactory;

    protected $fillable = [
        'ticket_id',
        'user_id',
        'quantity',
        'status',
        'code',
        'total_price',
        'ticket_date',
        'payment_proof',
    ];
    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function ticket_date($format = 'Y-m-d')
    {
        return Carbon::parse($this->attributes['ticket_date'])->format($format);
    }
}
