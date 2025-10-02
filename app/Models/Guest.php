<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Guest extends Model
{
    use HasFactory; use Notifiable;
    
    protected $guarded = ["id"];

    protected $fillable = [
        "firstname",
        "passport_num",
    ];

    public function booking(): BelongsTo {
        return $this->belongsTo(Booking::class);
    }
}
