<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Cart;

class User extends Model
{
    use HasFactory;
    protected $primaryKey = 'user_id';
    protected $tables = 'users';

    public function cart() {
        return $this->belongsTo(Cart::class, 'user_id');
    }
}
