<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\OrderForm;
use App\Models\BasketItem;

class OrderController extends Controller
{
    public function index(){
        if (Auth::check()) {
            return view('main.order.index');
        }else{
            return redirect()->route('login');
        }
    }

    public function store(OrderStoreRequest $request){

        $validated = $request->validated();

        /*чет не работает
        
        $user = Auth::user()->id;

        $full_price = ...;

        $session = session()->getId();

        $basket_id = BasketItem::query()->where($session)->get();*/

        $newOrder = OrderForm::query()->create([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'city' => $validated['city'],
            'adress' => $validated['adress'],
            /*'full_price' => $full_price,
            'basket_id' => $basket_id,
            'user_id' => $user,*/
        ]);

    }
}
