<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Form Helpers Basic Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/bootstrap.css" rel="stylesheet" media="screen">

    <!-- Bootstrap Form Helpers -->
    <link href="bootstrap/bootstrap-formhelpers.css" rel="stylesheet" media="screen">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <h1>Hello, world!</h1>


    <fieldset class="form-group">
      <label for="country">Country: </label>
      <div class="bfh-datepicker">
      </div>
      <small class="text-muted">We'll never share your email with anyone else.</small>
    </fieldset>


    <div class="container">
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="far fa-calendar-plus"></span>
                    </span>
                </div>
            </div>
        </div>

    </div>
</div>

    <script src="http://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>


    <!-- Bootstrap -->
    <script src="bootstrap/bootstrap.min.js"></script>

    <!-- Bootstrap Form Helpers -->
    <script src="bootstrap/bootstrap-formhelpers.js"></script>

    <script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker();
        });
    </script>
  </body>
</html>
