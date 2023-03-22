<?php

namespace App\Services;

use App\Models\BasketItem;

class CreateBasketItemServices {

    public function run($session, $id, $price){

        return BasketItem::query()->create([
            'session_id' => $session,
            'product_id' => $id,
            'price' => $price['price']
        ]);

    }

}
