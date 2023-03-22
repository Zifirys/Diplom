<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterRequest;
use App\Models\User;
use App\Services\CreateUserService;
use App\Services\AuthUserService;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    public function index(){
        return view('main.register.index');
    }

    public function store(StoreRegisterRequest $request){

        $validated = $request->validated();

        $user = (new CreateUserService)->run($validated);

        $auth = (new AuthUserService)->run($user);

        session(['alert' => 'Вы успешно зарегистрировались']);

        return redirect()->route('product');

    }
}
