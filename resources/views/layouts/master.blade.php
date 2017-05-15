<html>
      <head>
            <meta charset="utf-8">
            <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset('css/master.css') }}">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <script src="{{ asset('js/bootstrap.min.js') }}"></script>
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
            <title>@yield('title') - FootballManager</title>
      </head>
      <body>
            <div class="col-md-10 col-md-offset-1 container-fluid">
                  @yield('content')
            </div>
      </body>
</html>
