<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class reticula extends Model
{
    use HasFactory;
    protected $fillable=['idreticula','descripcion','fechaEnVigor','carrera_id'];

    public function materias():HasMany{
        return $this->hasMany(materia::class);
    }
    
    public function carreras():BelongsTo{
        return $this->belongsTo(carrera::class);
    }
}
