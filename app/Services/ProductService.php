<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductService{
   
    public function createProduct($validated){

        $product = Product::query()->create([
            'category' => $validated['category'],
            'shortName' => $validated['shortName'],
            'img' => $validated['img'],
            'color' => $validated['color'],
            'price' => $validated['price'],
        ]);

    }



    public function deleteProduct($id){

        $product = Product::query()->find($id);

        $product->delete();

        return $product;

    }


}
