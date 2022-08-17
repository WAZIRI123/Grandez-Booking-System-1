<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PackageReservation extends Model
{
    use HasFactory;
    protected $fillable = ['package_id', 'user_id', 'code', 'start_date', 'end_date', 'total_price'];
    public function users(): BelongsTo
    {
      return  $this->belongsTo(user::class);
    }
    public function packages(): BelongsTo
    {
      return  $this->belongsTo(Package::class);
    }
}
