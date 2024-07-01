<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;

class User extends Authenticatable
{
    use HasFactory;
    protected $primaryKey = 'user_id';
    protected $tables = 'users';
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    public function cart() {
        return $this->belongsTo(Cart::class, 'user_id');
    }
}
