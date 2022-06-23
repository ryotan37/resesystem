<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation_Availability extends Model
{
    use HasFactory;

    protected $table = 'reservation_availabilities';

    protected $primaryKey = 'reservation_availability_id';

    protected $fillable = [
        'user_id',
        'datetime'
    ];

    public function reservations() {
        return $this->hasMany('App\Models\Reservation_Availability');
    }
}
