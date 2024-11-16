<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class personal extends Model
{
    use HasFactory;
    protected $fillable = [
        'RFC',
        'nombres',
        'apellidop',
        'apellidom',
        'licenciatura',
        'lictit',
        'especializacion',
        'esptit',
        'maestria',
        'maetit',
        'doctorado',
        'doctit',
        'fechaingsep',
        'fechaingins',
        'depto_id',
        'puesto_id',
    ];
    public function depto():BelongsTo{
        return $this->belongsTo(depto::class);
    }

    public function puesto():BelongsTo{
        return $this->belongsTo(puesto::class);
    }

    public function personalplazas():HasMany{
        return $this->HasMany(personalplaza::class);
    }
}
