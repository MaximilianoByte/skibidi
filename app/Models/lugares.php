<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class lugares extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombrelugar',
        'nombrecorto',
        'edificio_id',
    ];
    public function edificio():BelongsTo{
        return $this->belongsTo(edificio::class);
    }
}
