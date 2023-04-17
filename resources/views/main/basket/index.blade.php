@extends('base.index')

@section('content')

  <main>
    <div class="wrapper">
      <div class="container">
        <div class="row">

          <div class="orders">


            @if($products->isEmpty())

              <div class="h2 text-center">

                <h2>Товар не был добавлен</h2>

              </div>

            @else

            <h1 class="text-center">Товары для заказа</h1>

              <div class="table-responsive">

                <table class="table table-dark table-sm">

                  <thead>
                    <tr>
                      <th scope="col"></th>
                      <th scope="col">Наименование</th>
                      <th scope="col">Цвет</th>
                      <th scope="col">Количество</th>
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
                      <td>{{ $product->quantity }}</td>
                      <td>{{ $product->product['price'] }} rub</td>
                      <td><a class="btn btn-default pull-right" href="{{ route('basket.delete', $product->id) }}">Убрать</a></td>
                    </tr>
                  </tbody>

                @endforeach

                  <tfoot>
                    <tr>
                      <th scope="col"></th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                      <th scope="col">Общее кол-во товаров: {{ $count }}</th>
                      <th scope="col">Общая стоимость: {{ $sum }}</th>
                      <th scope="col"></th>
                    </tr>
                  </tfoot>

                </table>

              </div>

            <div class="divOrderBtn">
              <a href="{{ route('orderForm') }}" class="orderBtn btn btn-default pull-right">Сформировать заказ</a>
            </div>

          @endif


          </div>

        </div>
      </div>
    </div>
  </main>


@endsection