<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
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
    protected $table = 'users';

    protected $primaryKey = 'user_id';

    protected $fillable = [
        'name',
        'position',
        'email',
        'password',
        'is_admin',
        'is_reservation_admin',
        'is_customer_admin',
        'is_menu_admin',
        'is_shift_admin',
        'joined_from'
    ];

    public function position() {
        return $this->belongsTo('App\Models\Position');
    }
    
    public function reservation_availabilities() {
        return $this->hasMany('App\Models\Reservation_Availability');
    }

    public function menu_users() {
        return $this->hasMany('App\Models\Menu_User');
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
        'joined_from' => 'date',
        'email_verified_at' => 'datetime'
    ];
}
