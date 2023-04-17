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

                <form class="add card" method="POST" action=" {{ route('add.store') }} ">

                  <h2 class="text-center">Добавление нового товара</h2>
                  
                    @csrf

                    <x-errors />

                    <div class="form-group">

                      <label class="required" for="category">Категория</label>
                       <input name="category" type="text" value="{{ old('category') }}" class="form-control" placeholder="Телефон" autofocus/>

                      <label class="required" for="fullName">Краткое наименование товара</label>
                      <input name="shortName" type="text" value="{{ old('shortName') }}" class="form-control" placeholder="Atraction 13 XL"/>

                      <label class="required" for="color">Цвет</label>
                      <input name="color" type="text" value="{{ old('color') }}" class="form-control" placeholder="Синий"/>

                      <label class="required" for="price">Цена</label>
                      <input name="price" type="text" value="{{ old('price') }}" class="form-control" placeholder="15000"/>

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