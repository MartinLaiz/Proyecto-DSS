<html>
      <head>
            <meta charset="utf-8">
            <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset('css/master.css') }}">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
            <title>@yield('title') - FootballManager</title>
      </head>
      <body>
            <div>
                  <div class="col-md-10 col-md-offset-1 container-fluid">
                        @yield('content')
                  </div>
            </div>
      </body>
</html>
