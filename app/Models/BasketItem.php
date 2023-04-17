<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasketItem extends Model
{
    use HasFactory;

    protected $table = 'basket_items';

    protected $fillable = [
            
        'product_id', 'user_id',

        'quantity', 'price',
        
    ];


    public function product() {
        return $this->belongsTo(Product::class);
    }

    public function user() {
        return $this->hasOne(User::class);
    }

    /*public function order() {
        return $this->belongsTo(Order::class);
    }*/

}
