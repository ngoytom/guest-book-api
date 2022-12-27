<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestBook extends Model
{
    protected $fillable = [
        'name',
        'message',
    ];

    use HasFactory; 
}
