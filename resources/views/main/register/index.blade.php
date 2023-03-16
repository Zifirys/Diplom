@extends('base.index')

@section('content')

  <main>
    <div class="wrapper">
      <div class="container-fluid">
        <div class="row">

          <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="col-lg-3 col-md-3 col-sm-2"></div>

            <div class="col-lg-6 col-md-6 col-sm-6">
              
              <section class="col-lg-12 col-md-12 col-sm-12 card">

                <form class="registerForm" method="POST" action=" {{ route('register.store') }} ">

                  <h2 class="text-center">Зарегистрация нового пользователя</h2>

                    @csrf

                    <x-errors />

                    <div class="form-group">
                      <label class="required" for="login">Имя пользователя</label>
                      <input name="login" value="{{ old('login') }}" type="text" class="form-control" placeholder="Логин" autofocus />

                      <label class="required" for="phone">Номер телефона</label>
                      <input name="phone" value="{{ old('phone') }}" type="tel" class="form-control" pattern="[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}" placeholder="800-555-35-35" />

                      <label class="required" for="mail">Номер телефона</label>
                      <input name="mail" value="{{ old('mail') }}" type="email" class="form-control" placeholder="Olesa228@gmail.com" />

                      <label class="required" for="password">Пароль</label>
                      <input name="password" type="password" class="form-control" placeholder="Пароль" />

                      <label class="required" for="password_confirmation">Повторите пароль</label>
                      <input name="password_confirmation" type="password" class="form-control" placeholder="Повторный пароль" />


                      <input name="admin" class="form-check-input" type="hidden" value="1" id="admin">
                      <!-- <span class="pull-right">
                        
                        <label class="form-check-label" for="admin">Админ</label>
                      </span> -->

                      <button type="submit" class="btn btn-primary btn-block">Зарегистрироваться</button>

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