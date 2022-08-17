<?php

namespace App\Models;

use App\Enums\ReservationStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'check_in',
        'activity_id',
        'price',
        'total_price',
        'no_of_visitors',
        'date',
        'user_id',
        'status',
        'code'
    ];
    protected $casts = [
        'status' => ReservationStatus::class,
       
    ];

    public function users(): belongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function activities(): belongsTo
    {
        return $this->belongsTo(Activity::class,'activity_id');
    }
}
