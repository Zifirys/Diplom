<?php

namespace App\Http\Controllers;

use  App\Http\Requests\StoreNewProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('main.product.index');
    }

    public function createNew(){
        return view('main.product.create');
    }

    public function storeNew(StoreNewProductRequest $request){

        /*$request->validated();*/



            session(['alert' => "Вы успешно добавили товар"]);
            
            return redirect()->route('home');



            /*если ошибка
                
            return redirect()->back()->withInput();*/


    }
}
