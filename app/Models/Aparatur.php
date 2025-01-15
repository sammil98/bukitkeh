<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aparatur extends Model
{
    use HasFactory;
    protected $table = 'aparaturs';
    protected $fillable = ['name', 'position', 'image', 'user_id'];
}
