<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Models\BasketItem;
use App\Services\OrderService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

class OrderController extends Controller
{

     public function index(){

        $user = Auth::user()->id;

        $sum = BasketItem::query()
            ->where('user_id', $user)
            ->where('form', '0')
            ->sum('price');

        return view('main.order.index', compact('sum'));
    }


    public function store(OrderRequest $request){

        $validated = $request->validated();

        (new OrderService)->FormOrder($validated);

         session(['alert' => "Вы успешно сформировали заказ"]);
        
        return redirect()->route('product');

    }
}
