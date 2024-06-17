<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'carts';
    protected $primaryKey = 'cart_id';

    public function product() {
        return $this->belongsToMany(Product::class, 'carts', 'cart_id', 'product_id');
    }
}
