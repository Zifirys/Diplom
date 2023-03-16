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

                <form class="add card" method="POST" action="#">

                  <h2 class="text-center">Добавление нового товара</h2>
                  
                    @csrf

                    <div class="form-group">

                      <label class="required" for="add1">Категория</label>
                       <input name="add1" type="text" class="form-control" placeholder="Ноутбук" autofocus/>

                      <label class="required" for="add2">Полное наименование товара</label>
                      <input name="add2" type="text" class="form-control" placeholder="Apple MacBook Air"/>

                      <label class="required" for="add3">Выбирите картинку</label>
                      <input type="file" class="form-control-file" id="add3">

                      <label class="required" for="add4">Цвет</label>
                      <input name="add4" type="text" class="form-control" placeholder="Синий"/>

                      <label class="required" for="add5">Цена</label>
                      <input name="add5" type="text" class="form-control" placeholder="15000"/>

                      <button type="submit" class="btn btn-primary btn-block mb-4">Добавить</button>

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