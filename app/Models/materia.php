<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class materia extends Model
{
    use HasFactory;
    protected $fillable=['idmateria','nombreMateria','nivel','nombreMediano','nombreCorto','modalidad','fechaEnVigor','semestre','reticula_id'];

   
    public function reticulas():BelongsTo{
        return $this->belongsTo(reticula::class);
    }
}
