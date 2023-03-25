<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use App\Services\UserService;

class LogoutController extends Controller{

    public function __invoke(): RedirectResponse{

        (new UserService)->userLogout();

        session(['alert-info' => "Вы успешно вышли из аккаунта"]);

        return redirect()->route('product');
    }

    
}

