

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
      <link href="{{ url('bootstrap/bootstrap.css')}}" rel="stylesheet">
      <link href="{{ url('bootstrap/bootstrap-formhelpers.css')}}" rel="stylesheet">


      @yield('stylesheet')

      <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

  <body>
    @include('partials.backend_nav')

    <div class="container-fluid">
      <div class="row">

        @include('partials.backend_sidebar')

        @yield('backend_content')
      </div>
    </div>

    @include('partials.scripts')

    @yield('js')

  </body>
</html>
