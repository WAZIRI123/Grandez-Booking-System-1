<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PackageReservation extends Model
{
    use HasFactory;
    protected $fillable = ['package_id', 'user_id', 'code', 'start_date', 'end_date', 'total_price','status','no_of_visitors'];
    public function users(): BelongsTo
    {
      return  $this->belongsTo(user::class);
    }
    public function packages(): BelongsTo
    {
      return  $this->belongsTo(Package::class,'package_id');
    }
}
