<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hora extends Model
{
    use HasFactory;

    protected $fillable = [
        'hora_ini',
        'hora_fin',
    ];

    
}
