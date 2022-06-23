<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $table = 'reservations';

    protected $primaryKey = 'reservation_id';

    protected $fillable = [
        'customer_id',
        'reservation_availability_id',
        'menu_id',
        'text'
    ];

    public function customer() {
        return $this->belongsTo('App\Models\Customer');
    }

    public function reservation_availability() {
        return $this->belongsTo('App\Models\Reservation_Availability');
    }

    public function menu() {
        return $this->belongsTo('App\Models\Menu');
    }
}
