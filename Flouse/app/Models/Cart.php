<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\User;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'carts';
    protected $primaryKey = 'cart_id';

    public function product() {
        return $this->hasOne(Product::class, 'product_id', 'cart_id');
    }

    public function user() {
        return $this->hasOne(User::class, 'user_id', 'cart_id');
    }
}
