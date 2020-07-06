 <html>
  <head>
    <meta charset="utf-8">
    <title>あつ森肩書きメーカー | @yield ('title','')</title>
    <meta name="description" content="@yield ('description')">
    <meta name=”keywords” content=”あつ森,肩書き,ACNH,あつまれどうぶつの森,肩書きメーカー”>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="twitter:card" content="summary"/>
    <meta property="og:title" content="あつ森 肩書きメーカー"/>
    <meta property="og:description" content="あつまれどうぶつの森で設定できる「肩書き」を作ったり入手方法を知ることができるよ"/>
    <meta property="og:image" content="{{ asset('images/top_view2.png') }}"/>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="shortcut icon" href="{{ asset('/favicon_coin.ico') }}">
  </head>

  <body>
     <div class="l-contain">
        <header class="l-header">
        @section('header')
        @show
        </header>

        @yield('content')

        <footer class="l-footer">
          @yield('footer')
        </footer>
     </div>
     <script src="{{ asset('js/app.js') }}" defer></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </body>
</html>
