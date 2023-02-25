 <?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('main.register.index');
    }

    public function store(StoreRegisterRequest $request){

        /*$validated->validated();*/

        

        session(['alert' => 'Вы успешно добавили пользователя']);

        return redirect()->route('home');
        
        /*если ошибка*/
        /*return redirect()->back()->withInput();*/
    }
}
