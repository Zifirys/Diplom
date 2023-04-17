<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderStoreRequest;
use App\Models\Order;
use App\Models\BasketItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller{

    public function index(){

        $user = Auth::user()->id;

        $sum = BasketItem::query()
            ->where('user_id', $user)
            ->sum('price');

        return view('main.order.index', compact('sum'));

    }



    public function indexList(){
        
        $orders = Order::query()
            ->latest('created_at')
        ->paginate(24);

        return view('main.order.list', compact('orders'));
    }



    public function store(OrderStoreRequest $request){

        $validated = $request->validated();

        $user = Auth::user()->id;

        $full_price = BasketItem::query()->where('user_id', $user)->sum('price');


        /*$basket_item_id = BasketItem::with('order')
            ->where('user_id', $user)     
            ->get('product_id');*/

        $basket_item_id = Order::with('basketItem')
            ->where('user_id', $user)     
            ->get();


        $newOrder = Order::query()->create([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'phone' => $validated['phone'],
            'mail' => $validated['mail'],
            'city' => $validated['city'],
            'adress' => $validated['adress'],
            'comment' => $validated['comment'],
            'full_price' => $full_price,
            'basket_item_id' => $basket_item_id,
            'user_id' => $user,
        ]);

        $clearBasket = BasketItem::query()->where('user_id', $user)->delete();

        session(['alert' => "Вы успешно сформировали заказ"]);

        return redirect()->route('product');
    }

    
}
