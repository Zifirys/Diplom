<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


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

        $auth = Auth::login($user);

        session(['alert' => 'Вы успешно зарегистрировались']);

        return redirect()->route('product');

    }
}
