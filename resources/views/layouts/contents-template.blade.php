 <html>
  <head>
    <meta charset="utf-8">
    <title>あつ森肩書きメーカー | @yield ('title','')</title>
    <meta name="description" content="@yield ('description')">
    <meta name=”keywords” content=”あつ森,肩書き,ACNH,あつまれどうぶつの森,肩書きメーカー”>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    @yield('head_twitter')

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="shortcut icon" href="{{ asset('/favicon_coin.ico') }}">
  </head>

  <body>
     <div class="l-contain">

        @yield('content')

        <footer class="l-footer">
          <div class="p-footerabout">
            Copyright kata. AlL Rights Reserved.
          </div>
          <div class="p-footername">
            Twitter Account: <a href="{{ url('https://twitter.com/denknit')}}" target="_blank">anch private account</a>
          </div>
        </footer>
     </div>
     <script src="{{ asset('js/app.js') }}" defer></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </body>
</html>
