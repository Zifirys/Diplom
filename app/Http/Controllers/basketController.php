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
            ->where('user_id', Auth::user()->id)
            ->orderBy('product_id', 'asc')
            ->get();


        return view('main.basket.index', compact('products'));
    }



    public function addTobasket(Request $request, $id){

        $user = Auth::user();

        $user = User::query()->find($user);


        $order = BasketItem::query()->create([
            'user_id' => auth()->id(),
            'product_id' => $id,
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
