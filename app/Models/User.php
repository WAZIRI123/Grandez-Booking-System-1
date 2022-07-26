<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'avatar',
        'code'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    public  function carreservations(): HasMany
    {
        return $this->hasMany(CarReservation::class);
    }
    public  function reservations(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }
    public  function transferreservations(): HasMany
    {
        return $this->hasMany(transferReservation::class);
    }
    public  function packagereservations(): HasMany
    {
        return $this->hasMany(PackageReservation::class);
    }
    public function avatarUrl(){
        return 'https://www.gravatar.com/avatar/'.md5(trim('wazirially1994@gmail.com'))?? "auth()->user()->avatar";
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
