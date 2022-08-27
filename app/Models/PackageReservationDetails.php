<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageReservationDetails extends Model
{
    use HasFactory;
    protected $fillable=['reservation_id','activity_id','day'];
}
