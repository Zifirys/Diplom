@extends('base.index')

@section('content')

  <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="col-lg-3 col-md-3 col-sm-2"></div>

            <div class="col-lg-6 col-md-6 col-sm-6">
              
              <section class="col-lg-12 col-md-12 col-sm-12 card">

                <form method="POST" action=" {{ route('login.store') }} ">

                    @csrf

                    <h1 class="text-center">Вход</h1>

                    <x-errors />

                    <div class="form-group">
                      <label class="required" for="login">Имя пользователя</label>
                      <input name="login" type="text" value="{{ old('login') }}" class="form-control" placeholder="Логин" autofocus/>

                      <label class="required" for="password">Пароль</label>
                      <input name="password" type="password" class="form-control" placeholder="Пароль" />

                      <div class="link-register">
                        <a href="{{ route('register') }}" class="pull-right">Зарегистрироваться</a>
                      </div>

                      <button type="submit" class="btn btn-info btn-block">Войти</button>
                     </div>

                </form>
              </section>

            </div>

          </div>

@endsection