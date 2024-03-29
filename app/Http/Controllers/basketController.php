<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Models\Product;
use App\Models\BasketItem;
use App\Models\User;
use App\Services\BasketService;
use App\Services\OrderService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;


class BasketController extends Controller{

    public function index(Request $request){

        if (Auth::check()) {

            $user = Auth::user()->id;

            $products = BasketItem::query()
                ->where('user_id', $user)
                ->where('form', '0')
                ->orderBy('product_id', 'asc')
                ->get();

            $count = BasketItem::query()
                ->where('user_id', $user)
                ->where('form', '0')
                ->count();

            $sum = BasketItem::query()
                ->where('user_id', $user)
                ->where('form', '0')
                ->sum('price');


            return view('main.basket.index', compact('products', 'count', 'sum'));

        }else{

            return redirect()->route('login');
        }
    }



    public function addToBasket(Request $request, $id){

        (new BasketService)->addToBasket($id);

        return redirect()->route('basket');
    }



    public function deleteFromBasket($id){

        (new BasketService)->deleteFromBasket($id);
        
        return redirect()->route('basket');

    }

}
