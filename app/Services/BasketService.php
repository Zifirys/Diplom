<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\BasketItem;
use App\Services\UserService;


class BasketService{
   
     public function addToBasket($id){

        $session = session()->getId();

        $product = Product::query()->find($id);

        $basketItem = BasketItem::query()->create([
            'session_id' => $session,
            'product_id' => $id,
            'price' => $product['price']
        ]);

    }



     public function deleteFromBasket($id){

         $request = BasketItem::query()->find($id);

         $request->delete();

    }


}
