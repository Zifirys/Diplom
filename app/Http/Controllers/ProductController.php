<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProductController extends Controller
{
    public function index(Request $request){

        $validated = $request->validate([
            'search' => ['nullable', 'string', 'max:50'],
        ]);

        $query = Product::query();

        if ($search = $validated['search'] ?? null){
            $query->where('category', 'like', "%{$search}%");
            $query->orWhere('shortName', 'like', "%{$search}%");
            $query->orWhere('color', 'like', "%{$search}%");
        }

        $products = $query
            ->orderBy('category', 'asc')
            ->orderBy('shortName', 'asc')
            ->paginate(12);


        $user = Auth::user();

        $admin = User::query()->find($user);


        return view('main.product.index', compact('products', 'admin'));
    }



    public function createNew(){
        return view('main.product.create');
    }



    public function storeNew(ProductRequest $request){

        $validated = $request->validated();

        $product = Product::query()->create([
            'category' => $validated['category'],
            'shortName' => $validated['shortName'],
            'img' => $validated['img'],
            'color' => $validated['color'],
            'price' => $validated['price'],
        ]);



        session(['alert' => "Вы успешно добавили товар"]);
        
        return redirect()->route('product');
    }


    public function delete($id){

        $request = Product::query()->find($id);

        if($request->delete()){

            session(['alert' => "Товар успешно удален"]);

            return redirect()->route('product');

        }else{
            abort(404);
        }

    }
}
