@extends('base.index')

@section('content')

  <main>
    <div class="wrapper">
      <div class="container">
        <div class="row">

          <div class="orders">

            <h1 class="text-center">Товары для заказа</h1>
            <h1 class="text-center">ТАБЛИЦА ПЛОХО АДАПТИВНА</h1>

            
            <table class="table table-dark table-sm">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">Наименование</th>
                  <th scope="col">Количество</th>
                  <th scope="col">Стоимость</th>
                  <th scope="col"></th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td><img class="orderImg" src="assets/img/mac.jpg" alt="картинка"></td>
                  <td>macbook</td>
                  <td><input type="number" value="1" name="tentacles"></td>
                  <td>256 rub</td>
                  <td><button type="submit" class="btn btn-primary pull-right">Убрать</button></td>
                </tr>
                <tr>
                  <td><img class="orderImg" src="assets/img/mac.jpg" alt="картинка"></td>
                  <td>macbook</td>
                  <td>2</td>
                  <td>256 rub</td>
                  <td><button type="submit" class="btn btn-primary pull-right">Убрать</button></td>
                </tr>
                <tr>
                  <td><img class="orderImg" src="assets/img/mac.jpg" alt="картинка"></td>
                  <td>macbook</td>
                  <td>2</td>
                  <td>256 rub</td>
                  <td><button type="submit" class="btn btn-primary pull-right">Убрать</button></td>
                </tr>
                <tr>
                  <td><img class="orderImg" src="assets/img/mac.jpg" alt="картинка"></td>
                  <td>macbook</td>
                  <td>2</td>
                  <td>256 rub</td>
                  <td><button type="submit" class="btn btn-primary pull-right">Убрать</button></td>
                </tr>
              </tbody>

              <tfoot>
                <tr>
                  <th scope="col"></th>
                  <th scope="col"></th>
                  <th scope="col">Общее кол-во предметов</th>
                  <th scope="col">Общая тоимость</th>
                  <th scope="col"></th>
                </tr>
              </tfoot>
            </table>

            <div class="divOrderBtn">
              <button type="submit" class="orderBtn btn btn-default pull-right">Сформировать заказ</button>
            </div>

          </div>

        </div>
      </div>
    </div>
  </main>


@endsection