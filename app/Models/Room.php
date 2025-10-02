<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Room extends Model
{
    use HasFactory; use Notifiable;
    
    protected $guarded = ["id"];
    
    protected $fillable = [
        "hotel_id",
        "room_num",
        "type",
        "per_night_price",
        "is_available",
    ];

    public function hotel(): BelongsTo {
        return $this->belongsTo(Hotel::class);
    }

    public function booking(): BelongsTo {
        return $this->belongsTo(Booking::class);
    }
}
