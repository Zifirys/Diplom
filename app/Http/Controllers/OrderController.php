<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\OrderForm;
use App\Models\BasketItem;

class OrderController extends Controller{

    /*public function index(){
        if (Auth::check()) {
            return view('main.order.index');
        }else{
            return redirect()->route('login');
        }
    }



    public function store(OrderStoreRequest $request){

        $validated = $request->validated();

        $session = session()->getId();

        $full_price = BasketItem::query()->where('session_id', $session)->sum('price');

        $user = Auth::user()->id;


        $basket_item_id = BasketItem::query()
            ->with('order')
            ->where('session_id', $session)            
            ->get('product_id');


        $newOrder = OrderForm::query()->create([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'city' => $validated['city'],
            'adress' => $validated['adress'],
            'full_price' => $full_price,
            'basket_item_id' => $basket_item_id ?? "1001",
            'user_id' => $user,
        ]);


        return redirect()->route('product');
    }*/

    
}
