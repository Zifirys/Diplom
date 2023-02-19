@extends('base.index')

@section('content')

  <main>
    <div class="wrapper">
      <div class="container-fluid">
        <div class="row">

          <div class="col-lg-3 col-md-3 col-sm-2"></div>

          <div class="main col-lg-6 col-md-6 col-sm-8 text-center">

            <h2>Что вы хотите сделать?</h2>

            <section class="mainSection text-center">
              <a href=" {{ route('add') }} ">
                <h3>Добавить товар</h3>
              </a>
            </section>

            <section class="mainSection text-center">
              <a href=" {{ route('register') }} ">
                <h3>Добавить пользователя</h3>
              </a>
            </section>

          </div>

        </div>
      </div>
    </div>
  </main>


@endsection