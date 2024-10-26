<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class carrera extends Model
{
    use HasFactory;
    protected $fillable=['idcarrera','nombrecarrera','nombremediano','nombrecorto','depto_id'];



    public function alumnos():HasMany{ 
        return $this->hasMany(alumno::class);
    }
    public function carreras():HasMany{
        return $this->hasMany(reticula::class);
    }
    
    public function depto():BelongsTo{
        return $this->belongsTo(depto::class);
    }
}
