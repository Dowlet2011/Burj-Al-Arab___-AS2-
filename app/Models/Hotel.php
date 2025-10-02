<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

class Hotel extends Model
{
    use HasFactory; use Notifiable;
    
    protected $guarded = ["id"];

    protected $fillable = [
        "city_id",
        "name",
        "address",
        "phone_num",
        "star",
    ];

    public function city(): BelongsTo {
        return $this->belongsTo(City::class);
    }

    public function rooms(): HasMany {
        return $this->hasMany(Room::class);
    }
}
