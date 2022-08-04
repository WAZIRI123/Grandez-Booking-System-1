<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transfer extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price','slug'];

    public function carReservations(): HasMany
    {
        return $this->hasMany(transferReservation::class);
    }
    protected function name(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => ['slug' => Str::slug($value), 'name' => $value]
        );
    }
}
