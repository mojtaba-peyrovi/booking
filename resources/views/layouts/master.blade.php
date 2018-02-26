
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>booking.com @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('bootstrap/bootstrap.css')}}" rel="stylesheet">
    <!-- Bootstrap Form Helpers -->
    <link href="bootstrap/bootstrap-formhelpers.css" rel="stylesheet" media="screen">

    @yield('stylesheet')

    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

  </head>

  <body>
    @include('partials.nav')


    <main role="main">

    @yield('content')

    </main>

    @include('partials.footer')

    @include('partials.scripts')

    @yield('js')
  </body>
</html>
