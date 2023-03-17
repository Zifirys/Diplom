@extends('base.index')

@section('content')

  <main>
    <div class="wrapper">
      <div class="container-fluid">
        <div class="row">

          <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="col-lg-2 col-md-2 col-sm-2"></div>


            <div class="col-lg-8 col-md-8 col-sm-8">

              <section class="col-lg-12 col-md-12 col-sm-12">

                <form class="add card" method="POST" action="{{ route('orderForm.store') }}">

                  <h2 class="text-center">Формирование заказа</h2>
                  
                    @csrf

                    <x-errors />

                    <div class="form-group">

                      <label class="required" for="first_name">Имя</label>
                       <input name="first_name" type="text" value="{{ old('first_name') }}" class="form-control" placeholder="Тим" autofocus/>

                      <label class="required" for="last_name">Фамилия</label>
                      <input name="last_name" type="text" value="{{ old('last_name') }}" class="form-control" placeholder="Бертон"/>

                      <label class="required" for="city">Город</label>
                      <input name="city" type="text" value="{{ old('city') }}" class="form-control" placeholder="Омерика"/>

                      <label class="required" for="adress">Улица дом, квартира</label>
                      <input name="adress" type="text" value="{{ old('adress') }}" class="form-control" placeholder="Пушкина 9к1, 79"/>

                      <button type="submit" class="btn btn-primary">оплатить</button>

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