<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('main.register.index');
    }

    public function store(StoreRegisterRequest $request){

       $validated = $request->validated();

       $user = User::query()->create([
            'login' => $validated['login'],
            'password' => bcrypt($validated['password']),
       ]);

        

        session(['alert' => 'Вы успешно добавили пользователя']);

        return redirect()->route('home');

    }
}
