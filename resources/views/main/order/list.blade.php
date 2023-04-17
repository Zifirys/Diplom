@extends('base.index')

@section('content')

  <main>
    <div class="wrapper">
      <div class="container-fluid">
        <div class="row">

          <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="col-lg-2 col-md-2 col-sm-2"></div>


            <div class="col-lg-8 col-md-8 col-sm-8">

              @foreach($orders as $order)
              <section class="client-card col-lg-12 col-md-12 col-sm-12">
                <div class="client">

                  <span class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <h4>{{ $order->first_name }} {{ $order->last_name }}</h4>
                    <h4>{{ $order->city }} {{ $order->adress }}</h4>
                    <h3>{{ $order->full_price }} руб</h3>
                  </span>

                  <span class="pull-right col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <p>{{ $order->basket_item_id }}</p>
                  </span>

                </div>
              </section>
              @endforeach

              {{ $orders->links() }}

            </div>

          </div>

        </div>
      </div>
    </div>
  </main>


@endsection