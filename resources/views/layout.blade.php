<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login, registration & Logout</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">WebSiteName</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li><a href="#">Page 2</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @guest
        <li><a href="{{url('register')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="{{url('login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        
        @else
        <li><a href="{{url('logout')}}"><span class="glyphicon glyphicon-log-out">Welcome, {{$user->name}}</span> Logout</a></li>

        @endguest
       
      </ul>
    </div>
  </nav>
    @yield('content')
</body>
</html>