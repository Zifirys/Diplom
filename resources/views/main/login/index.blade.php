@extends('base.index')

@section('content')

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

@endsection