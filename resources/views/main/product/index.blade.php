@extends('base.index')

@section('content')

  <main>
    <div class="wrapper">
      <div class="container">
        <div class="row">

          <div class="products">

            <input type="search" class="form-control" id="datatable-search-input" placeholder="Поиск">

            <section class="product col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="productImg"><img src="assets/img/mac.jpg" alt="картинка"></div>
              <div class="ProductText"><h3>Название</h3>
                <p>Остальное. Lorem ipsum dolor sit amet, consectetur adipisicing. Aliquam molestiae cum ea vero? Ex odio aliquam sed, maxime voluptas nemo!</p>
                <p>25 rubley</p>
                <p>Удалить только для админа</p>
              </div>
              <span><button type="submit" class="btn btn-info">Удалить</button></span>
              <button type="submit" class="btn btn-info pull-right">В заказ</button>
            </section>

            <section class="product col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="productImg"><img src="assets/img/mac.jpg" alt="картинка"></div>
              <div class="ProductText">
                <h3>Название</h3>
                <p>Остальное. !</p>
                <p>25 rubley</p>
              </div>
              <button type="submit" class="btn btn-info">Удалить</button>
              <button type="submit" class="btn btn-info pull-right">В заказ</button>
            </section>

            <section class="product col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="productImg"><img src="assets/img/mac.jpg" alt="картинка"></div>
              <div class="ProductText">
                <h3>Название</h3>
                <p>Остальное.  odio aliquam sed, maxime voluptas nemo!</p>
                <p>25 rubley</p>
             </div>
              <button type="submit" class="btn btn-info">Удалить</button>
              <button type="submit" class="btn btn-info pull-right">В заказ</button>
            </section>

            <section class="product col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="productImg"><img src="assets/img/mac.jpg" alt="картинка"></div>
              <div class="ProductText">
                <h3>Название</h3>
                <p>Ос aliquam sed, maxime voluptas nemo!</p>
                <p>25 rubley</p>
              </div>
              <button type="submit" class="btn btn-info">Удалить</button>
              <button type="submit" class="btn btn-info pull-right">В заказ</button>
            </section>



          </div>

        </div>
      </div>
    </div>
  </main>


@endsection