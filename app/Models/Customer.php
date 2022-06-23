<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $primaryKey = 'customer_id';

    protected $fillable = [
        'name',
        'email',
        'birthday',
        'sex',
        'password'
    ];

    protected $hidden = [
        'password'
    ];


    protected $casts = [
        'birthday' => 'date'
    ];

    public function reservations() {
        return $this->hasMany('App\Models\Reservation');
    }
}
