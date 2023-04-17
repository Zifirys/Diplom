<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\User;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller{

    public function index(Request $request){

        $validated = $request->validate([
            'search' => ['nullable', 'string', 'max:50'],
            'limit' => ['nullable', 'integer', 'min:1'],
        ]);


        $query = Product::query();


        if ($search = $validated['search'] ?? null){
            $query->where('category', 'like', "%{$search}%");
            $query->orWhere('shortName', 'like', "%{$search}%");
            $query->orWhere('color', 'like', "%{$search}%");
            $query->orWhere('price', 'like', "{$search}");
        }


        $limit = $validated['limit'] ?? 12;

        $products = $query
            ->orderBy('category', 'asc')
            ->orderBy('shortName', 'asc')
        ->paginate($limit);


        $auth = Auth::user();

        $user = User::query()->find($auth);

        return view('main.product.index', compact('products', 'user'));

    }



    public function createNew(){
        return view('main.product.create');
    }



    public function storeNew(ProductRequest $request){

        $validated = $request->validated();

        (new ProductService)->createProduct($validated);

        session(['alert' => "Вы успешно добавили товар"]);
        
        return redirect()->route('product');
    }



    public function delete($id){

        $product = (new ProductService)->deleteProduct($id);

        if($product){

            session(['alert' => "Товар успешно удален"]);

            return redirect()->route('product');

        }else{

            abort(404);
            
        }

    }


}
