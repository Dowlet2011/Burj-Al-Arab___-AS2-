<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
    
    protected $guarded = ["id"];
    
    protected $fillable = [
        "name",
    ];

    public function hotel(): HasMany {
        return $this->hasMany(hotel::class);
    }
}
