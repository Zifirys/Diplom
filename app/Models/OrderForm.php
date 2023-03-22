<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderForm extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [

        'first_name', 'last_name',

        'city', 'adress',

        'full_price',

        'basket_item_id', 'user_id',
        
    ];

    public function basket() {
        return $this->belongsTo(BasketItem::class);
    }

    public function user() {
        return $this->hasOne(User::class);
    }


}
