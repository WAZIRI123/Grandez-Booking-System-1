<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PackageType extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
        /**
     * Get all of the reviews for the Packages
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function packages(): HasMany
    {
        return $this->hasMany(Package::class);
    }
}
