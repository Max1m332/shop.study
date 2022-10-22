<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\UserController;
use Illuminate\Support\Str;
class User extends Model
{
   
    use HasFactory;

    public function get_orders() {
        return $this->hasMany(Order::class, 'id', 'user_id');
    }


    
    
    public function createToken($identify) {
        User::where('email', $identify)
        ->update(['token' => Str::random(30)]);
    }

}

    