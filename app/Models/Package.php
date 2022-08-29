<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Package extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',  'image', 'day1','day2','day3','day4','day5','day6','day7','day8','slug','package_type_id','total_days'
    ];
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'], function ($query, $search) {
            return $query->where('name', 'like', "%$search%");
        });
    }

    /**
     * Get all of the reviews for the Package_type
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */

    public function packageTypes(): BelongsTo
    {
        return $this->belongsTo(PackageType::class);
    }
    public function reservations(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }
    public function Packagereservations(): HasMany
    {
        return $this->hasMany(PackageReservation::class);
    }

    protected function name(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => ['slug' => Str::slug($value), 'name' => $value]
        );
    }
}
