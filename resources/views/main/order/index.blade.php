@extends('base.index')

@section('content')

  <main>
    <div class="wrapper">
      <div class="container">
        <div class="row">

          <div class="orders">

            <h1 class="text-center">Товары для заказа</h1>
            <p class="text-center">ТАБЛИЦА ПЛОХО АДАПТИВНА</p>




          @if($products->isEmpty())

            <div class="h2 text-center">

              {{ "Добавьте товар" }}

            </div>

            @else

              <table class="table table-dark table-sm">

                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Наименование</th>
                    <th scope="col">Цвет</th>
                    <th scope="col">Стоимость</th>
                    <th scope="col"></th>
                  </tr>
                </thead>



              @foreach($products as $product)

                <tbody>
                  <tr>
                    <td></td>
                    <td>{{ $product->product['shortName'] }}</td>
                    <td>{{ $product->product['color'] }}</td>
                    <td>{{ $product->product['price'] }} rub</td>
                    <td><a class="btn btn-info pull-right" href="{{ route('order.delete', $product->id) }}">Убрать</a></td>
                  </tr>
                </tbody>

              @endforeach



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
              <button type="submit" class="orderBtn btn btn-primary pull-right">Сформировать заказ</button>
            </div>

          @endif

          </div>

        </div>
      </div>
    </div>
  </main>


@endsection