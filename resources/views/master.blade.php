<?php use Illuminate\Support\Facades\DB;

?>
<!DOCTYPE html>
<html lang="en">

<head>

    @yield('custom-css')
    <link rel="stylesheet" href="css/master.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>

<body>

  <div class="container-fluid">
<div class="row">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Lorem Ipsum</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Appointment</a></li>
        <li><a href="#">View Appointment</a></li>
        <li><a href="#">FAQ</a></li>
      </ul>
    </div>
  </nav>
</div>
  </div>
    @yield('content')

    <div class="footer">
    <div class="container">
Republic of Lorem Ipsum
    </div>
    </div>
</body>

</html>
