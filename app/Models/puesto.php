<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class puesto extends Model
{
    use HasFactory;
    protected $fillable=['nombre','tipo'];

    public function personal():HasMany{
        return $this->HasMany(personal::class);
    }
}
