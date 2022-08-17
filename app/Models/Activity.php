<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Activity extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','image', 'description', 'explanation','slug'
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
    public function reservations(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }

    protected function name(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => ['slug' => Str::slug($value), 'name' => $value]
        );
    }
}
