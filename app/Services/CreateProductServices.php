<?php

namespace App\Services;

use App\Models\Product;

class CreateProductServices {

    public function run(array $attributes){

        return Product::query()->create([
            'category' => $validated['category'],
            'shortName' => $validated['shortName'],
            'img' => $validated['img'],
            'color' => $validated['color'],
            'price' => $validated['price'],
        ]);

    }

}
