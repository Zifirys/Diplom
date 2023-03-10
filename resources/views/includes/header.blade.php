<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Дипломный сайт')</title>
    
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  </head>
  <body>

    <header>
      <div class="container-fluid">
        <div class="row">
          
          <nav role="navigation" class="navbar navbar-default">
            <div class="container">

              <ul class="nav nav-pills">
                <li><a href=" {{ route('home') }} ">Главная</a></li>
                <li><a href=" {{ route('basket') }} ">Сформировать заказ</a></li>
                <li><a href=" {{ route('logout') }} " class="pull-right">Выход</a></li>

              </ul>

            </div>
          </nav>

        </div>
      </div>
    </header>
