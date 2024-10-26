<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class alumno extends Model
{
    use HasFactory;
    protected $fillable=['noctrl','nombre','apellido','apellidom','sexo','email'];
    public function carrera(): BelongsTo {
        return $this->belongsTo(carrera::class);
    }
}
