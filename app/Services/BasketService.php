<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\BasketItem;
use App\Services\UserService;


class BasketService{
   
     public function addToBasket($id){

        $user = Auth::user()->id;

        $product = Product::query()->find($id);

        $basketItem = BasketItem::query()->create([
            'user_id' => $user,
            'product_id' => $id,
            'price' => $product['price'],
            'first_name' => 'null',
            'last_name' => 'null',
            'phone' => 'null',
            'mail' => 'null',
            'city'  => 'null',
            'adress' => 'null',
            'comment' => 'null',
        ]);

    }



     public function deleteFromBasket($id){

         $request = BasketItem::query()->find($id);

         $request->delete();

    }

}
