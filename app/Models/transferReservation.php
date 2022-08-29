<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class transferReservation extends Model
{
    use HasFactory;
    protected $fillable = ['transfer_id', 'date','user_id','code','status'];

    protected $casts = [
        'price' => 'integer',
        'date' => 'immutable_date',
    ];

    public function transfers(): BelongsTo
    {
        return $this->belongsTo(Transfer::class,'transfer_id');
    }
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
