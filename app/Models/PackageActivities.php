<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class PackageActivities extends Model
{
    use HasFactory;
    protected $fillable=['name','slug'];

    protected function name(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => ['slug' => Str::slug($value), 'name' => $value]
        );
    }
}
