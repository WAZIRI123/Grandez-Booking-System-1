<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CarReservation extends Model
{
    use HasFactory;
    protected $fillable = ['car_id','total_price', 'start_date', 'end_date','user_id','code'];

    protected $casts = [
        'total_price' => 'integer',
        'start_date' => 'immutable_date',
        'end_date' => 'immutable_date',
    ];

    public function cars(): BelongsTo
    {
        return $this->belongsTo(CarRental::class);
    }
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
