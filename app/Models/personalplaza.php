<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class personalplaza extends Model
{
    use HasFactory;
    protected $fillable = [
        'tiponombramiento',
        'plaza_id',
        'personal_id',
    ];
    
    public function plaza():BelongsTo{
        return $this->belongsTo(plaza::class);
    }

    public function personal():BelongsTo{
        return $this->belongsTo(personal::class);
    }
}
