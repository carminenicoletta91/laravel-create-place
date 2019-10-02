<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Css -->
        <link rel="stylesheet" href="{{mix('css/app.css')}}">

    </head>
    <body>
      <header>
        <p>Hello in {{$type}}</p>
      </header>
      <div class="link">
        @yield('link')

      </div>

      <div class="Container-{{$type}}">
        @yield('content')
      </div>
      <footer>

        <p>Footer {{$type}}</p>
      </footer>
    </body>
</html>
