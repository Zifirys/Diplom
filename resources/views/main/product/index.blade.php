@extends('base.index')

@section('content')

  <main>
    <div class="wrapper">
      <div class="container-fluid">
        <div class="row">

          <div class="bigImg"></div>

          <div class="products container">

            <div class="big-main-img"></div>

            @if(Auth::check())
              @foreach($user as $admin)
                @if($admin->admin == '1')

                  <a href="{{ route('add') }}" class="btn btn-info">Добавить товар</a>

                  <a href="{{ route('orderList') }}" class="btn btn-info pull-right">Список заказов</a>
                  
                @endif
              @endforeach
            @endif

            <form class="searchForm" method="GET" action="{{ route('product') }}">
              <div class="form-group">

                <input name="search" value="{{ old('search') }}" type="search" class="form-control" id="search" placeholder="Поиск">
                <button type="submit" for="search" class="btn btn-default">Искать</button>

                <form action="{{ route('product') }}">
                  <button type="submit" class="btn btn-default pull-right">Сброс</button>
                </form>

              </div>
            </form>

            @if($products->isEmpty())

              <div class="h2 text-center">

                <h2>Нет товаров</h2>

              </div>

            @else

              @foreach($products as $product )

                <section class="product col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="productImg"><img src="{{ $product->img }}" alt="картинка"></div>
                  <div class="ProductText">
                    <h4>{{ $product->shortName }}</h4>
                    <p>{{ $product->color }}</p>
                    <h3>{{ $product->price }} руб.</h3>
                  </div>

                @if(Auth::check())
                  @foreach($user as $admin)
                    @if($admin->admin == "1")
                      <span>
                        <a class="btn btn-info pull-right" href="{{ route('product.delete', $product->id) }}"><i class="glyphicon glyphicon-trash"></i></a>
                      </span>
                    @endif
                  @endforeach
                @endif

                  <a href="{{ route('addTobasket', $product->id) }}" class="btn btn-default">В заказ</a>
                </section>

              @endforeach

              <div class="pagination col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-right">

                {{ $products->links() }}

              </div>

            @endif


          </div>

        </div>
      </div>
    </div>
  </main>


@endsection