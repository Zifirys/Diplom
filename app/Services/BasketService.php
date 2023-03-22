<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\BasketItem;
use App\Models\User;
use App\Services\BasketService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

class BasketService{
   
     public function addToBasket(Request $request, $id){

        $session = session()->getId();

        $price = Product::query()->find($id);

        $BasketItem = BasketItem::query()->create([
            'session_id' => $session,
            'product_id' => $id,
            'price' => $price['price']
        ]);


        return redirect()->route('basket');
    }

     public function deleteFromBasket($id){

        $request = BasketItem::query()->find($id);

        if($request->delete()){

            session(['alert' => "Товар успешно удален"]);

            return redirect()->route('basket');

        }else{
            abort(404);
        }

    }

}
