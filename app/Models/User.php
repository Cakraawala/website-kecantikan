<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id'];
    protected $table = 'users';
    public function province(){
        return $this->belongsTo(Province::class, 'province_id');
    }
    public function regency(){
        return $this->belongsTo(Regency::class, 'regency_id' ,'id');
    }
    public function district(){
        return $this->belongsTo(District::class, 'district_id','id');
    }
    public function historycarts(){
        return $this->hasMany(Cart::class, 'users_id' ,'id');
    }
    public function checkouts(){
        return $this->hasMany(Checkout::class, 'users_id', 'id');
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
