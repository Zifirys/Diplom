<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content=" {{ csrf_token() }} ">

    <title>Вход</title>
    
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
  </head>

    
    <div class="main1">
      <div class="wrapper">
        <div class="container">
          <div class="row">


            <section class="login col-lg-12 col-md-12 col-sm-12">

              <form class="loginForm" method="POST" action=" {{ route('login.store') }} ">
                <div class="card">

                  @csrf

                  <h1 class="text-center">Вход</h1>

                  <x-errors />

                  <div class="form-group">
                    <label class="required" for="login">Имя пользователя</label>
                    <input name="login" type="text" value="{{ old('login') }}" class="form-control" placeholder="Логин" autofocus/>

                    <label class="required" for="password">Пароль</label>
                    <input name="password" type="password" class="form-control" placeholder="Пароль" />

                    <button type="submit" class="btn btn-info btn-block mb-4">Войти</button>
                  </div>

                </div>
              </form>
            </section>

          </div>
        </div>
      </div>
    </div>


</html>