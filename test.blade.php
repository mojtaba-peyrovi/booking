<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>test</title>
    </head>
    !-- Bootstrap core CSS -->
  <link href="{{ url('bootstrap/bootstrap.css')}}" rel="stylesheet">
    <link href="css/bootstrap-form-helpers.min.css" rel="stylesheet">


    <body>

        <fieldset class="form-group">
    <label for="country">Country: </label>
    <select class="form-control bfh-countries" data-country="US" name="Country"></select>
    <small class="text-muted">We'll never share your email with anyone else.</small>
    </fieldset>

    <script src="js/bootstrap-formhelpers.min.js"></script>
    </body>
</html>
