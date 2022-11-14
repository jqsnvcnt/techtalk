<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CancelRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'reason',
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}