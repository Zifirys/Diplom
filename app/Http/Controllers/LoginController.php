<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLoginReguest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('main.login.index');
    }

    public function store(StoreLoginReguest $request){

        $validated = $request->validated();


        if (Auth::attempt($validated)) {

            $request->session()->regenerate();

            session(['alert-info' => "Вы успешно авторизировались"]);

            return redirect()->route('home');

        }else{
            return redirect()->back()->withErrors(['alert-danger' => 'Неверный логин или пароль']);
        }
    }


}
