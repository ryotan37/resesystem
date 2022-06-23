<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
       $user = User::first(); // Userモデル（usersテーブル）で一番最初にヒットするデータをコレクションで返す
 
       dd($user->name); // nameの値をデバッグ
    }
}