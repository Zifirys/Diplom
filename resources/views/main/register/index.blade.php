@extends('base.index')

@section('content')

  <main>
    <div class="wrapper">
      <div class="container-fluid">
        <div class="row">

          <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="col-lg-3 col-md-3 col-sm-2"></div>

            <div class="col-lg-6 col-md-6 col-sm-6">
              
              <section class="col-lg-12 col-md-12 col-sm-12">

                <form class="registerForm" method="POST" action=" {{ route('register.store') }} ">

                  <h2 class="text-center">Добавление нового пользователя</h2>

                    @csrf

                    <x-errors />

                    <div class="form-group">
                      <label class="required" for="login">Имя пользователя</label>
                      <input name="login" value="{{ old('login') }}" type="text" class="form-control" placeholder="Логин" autofocus />

                      <label class="required" for="password">Пароль</label>
                      <input name="password" type="password" class="form-control" placeholder="Пароль" />

                      <label class="required" for="password_confirmation">Повторите пароль</label>
                      <input name="password_confirmation" type="password" class="form-control" placeholder="Повторный пароль" />

                      <button type="submit" class="btn btn-info btn-block">Добавить</button>

                  </div>
                </form>
              </section>

            </div>

          </div>

        </div>
      </div>
    </div>
  </main>


@endsection