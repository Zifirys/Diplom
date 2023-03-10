@extends('base.index')

@section('content')

  <main>
    <div class="wrapper">
      <div class="container-fluid">
        <div class="row">


          <div class="col-lg-3 col-md-3 col-sm-2"></div>

          <div : class="main col-lg-6 col-md-6 col-sm-8 text-center">

            <h2>Что вы хотите сделать?</h2>

            <section class="mainSection text-center">
              <a href=" {{ route('product') }} ">
                <h3>Выбрать товар</h3>
              </a>
            </section>

            @foreach($admin as $adm)
              @if($adm->admin == '1')
                <section class="mainSection text-center">
                  <a href=" {{ route('home.admin') }} ">
                    <h3>Дополнительный функционал</h3>
                  </a>
                </section>
              @endif
            @endforeach


            <section class="mainSection text-center">
              <a href=" {{ route('basket') }} ">
                <h3>Сформировать заказ</h3>
              </a>
            </section>

          </div>


        </div>
      </div>
    </div>
  </main>


@endsection