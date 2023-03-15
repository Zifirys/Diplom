<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\BasketItem;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;


class BasketController extends Controller
{
    public function index(Request $request){

        $products = BasketItem::query()
            ->where('session_id', session()->getId())
            ->orderBy('product_id', 'asc')
            ->get();

        $count = BasketItem::query()
            ->where('session_id', session()->getId())
            ->count();


        $sum = BasketItem::query()->sum('price');

        return view('main.basket.index', compact('products', 'count', 'sum'));
    }



    public function addTobasket(Request $request, $id){

        $session = session()->getId();

        $order = BasketItem::query()->create([
            'session_id' => $session,
            'product_id' => $id,
            /*'price' =>*/
        ]);

        return redirect()->route('basket');
    }




    public function deletebasket($id){

        $request = BasketItem::query()->find($id);

        if($request->delete()){

            session(['alert' => "Товар успешно удален"]);

            return redirect()->route('basket');

        }else{
            abort(404);
        }

    }


}
