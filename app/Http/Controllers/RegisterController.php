<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
            'phone' => $validated['phone'],
            'mail' => $validated['mail'],
            'admin' => "0",
        ]);

        Auth::login($user);

        session(['alert' => 'Вы успешно зарегистрировались']);

        return redirect()->route('product');

    }
}
