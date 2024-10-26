<?php

namespace App\Models;

use App\Models\carrera;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class depto extends Model
{
    use HasFactory;
    protected $fillable=['iddepto','nombredepto','nombremediano','nombrecorto'];
    public function carreras():HasMany{

        return $this->hasMany(carrera::class);
    }
}
