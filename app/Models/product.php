<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [

        'category',
        
        'shortName', 'price',

        'img', 'color',

        'search',
    ];

    public function order()
    {
        return $this->hasone(Order::class);
    }
}

