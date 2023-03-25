<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterRequest;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class RegisterController extends Controller{

    public function index(){
        return view('main.register.index');
    }



    public function store(StoreRegisterRequest $request){

        $validated = $request->validated();

        (new UserService)->userRegister($validated);

        session(['alert' => 'Вы успешно зарегистрировались']);

        return redirect()->route('product');

    }


}
