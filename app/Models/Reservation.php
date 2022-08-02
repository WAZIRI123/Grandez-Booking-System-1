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
        'package_id',
        'number_of_visitor',
        'price',
        'total_price',
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

    public function packages(): belongsTo
    {
        return $this->belongsTo(Package::class,'package_id');
    }
}
