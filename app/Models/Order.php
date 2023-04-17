<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [

        'first_name', 'last_name',

        'phone', 'mail',

        'city', 'adress',

        'comment',

        'full_price',

        'basket_item_id', 'user_id',
        
    ];


    public function user() {
        return $this->hasOne(User::class);
    }

    /*public function basketItem() {
        return $this->HasMany(BasketItem::class);
    }*/

}
