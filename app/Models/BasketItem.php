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
        

        'first_name', 'last_name',

        'phone', 'mail',

        'city', 'adress',

        'comment',

        'full_price',

        'basket_item_id', 'user_id',
        
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
