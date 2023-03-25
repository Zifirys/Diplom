<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLoginReguest;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller{

    public function index(){
        return view('main.login.index');
    }



    public function store(StoreLoginReguest $request){

        $validated = $request->validated();

        $auth = (new UserService)->userAuth($request, $validated);

        if ($auth) {

            session(['alert-info' => "Вы успешно авторизировались"]);

            return redirect()->route('product');

        }else{
            return redirect()->back()->withErrors(['alert-danger' => 'Неверный логин или пароль']);
        }
        
    }


}
