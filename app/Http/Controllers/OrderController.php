<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;


class OrderController extends Controller
{
    public function index(Request $request){

        $products = Order::query()
            ->where('user_id', Auth::user()->id)
            ->get();


        return view('main.order.index', compact('products'));
    }



    public function addToOrder(Request $request, $id){

        $user = Auth::user();

        $user = User::query()->find($user);


        $order = Order::query()->create([
            'user_id' => auth()->id(),
            'product_id' => $id,
        ]);

        return redirect()->route('order');
    }




    public function deleteOrder($id){

        $request = Order::query()->find($id);

        if($request->delete()){

            session(['alert' => "Товар успешно удален"]);

            return redirect()->route('order');

        }else{
            abort(404);
        }

    }

}
