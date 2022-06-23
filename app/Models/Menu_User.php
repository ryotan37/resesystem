<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu_User extends Model
{
    use HasFactory;

    protected $table = 'menu_users';

    protected $primaryKey = 'menu_user_id';

    protected $fillable = [
        'user_id',
        'menu_id'
    ];

    public function user() {
        return $this->belongTo('App\Models\User');
    }

    public function menu() {
        return $this->belongTo('App\Models\Menu');
    }
}
