<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Booking extends Model
{
    use HasFactory; use Notifiable;

    protected $guarded = ["id"];

    protected $fillable = [
        "check_in", 
        "check_out",
    ];

    public function guest(): HasMany {
        return $this->hasMany(Guest::class);
    }

    public function room(): BelongsTo {
        return $this->belongsTo(Room::class); 
    }
}
