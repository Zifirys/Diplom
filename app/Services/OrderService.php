<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\BasketItem;
use App\Services\UserService;


class OrderService{
   
     public function FormOrder($validated){

        $user = Auth::user()->id;

        $formOrder = BasketItem::query()
            ->where('user_id', $user)
            ->where('form', 0)
            ->update([
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'],
                'phone' => $validated['phone'],
                'mail' => $validated['mail'],
                'city'  => $validated['city'],
                'adress' => $validated['adress'],
                'comment' => $validated['comment'],
                'form' => 1,
        ]);

    }

}
