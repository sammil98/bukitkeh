<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentInformation extends Model
{
    use HasFactory;

    protected $table = 'payment_informations';

    protected $fillable = [
        'name',
        'bank_name',
        'bank_account_number',
        'bank_account_name',
        'user_id'
    ];
}
