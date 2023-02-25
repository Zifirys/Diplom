<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLoginReguest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('main.login.index');
    }

    public function store(StoreLoginReguest $request){

        /*$request->validated();*/



        session(['alert-info' => "Вы успешно авторизировались"]);

        return redirect()->route('home');
    }
}
